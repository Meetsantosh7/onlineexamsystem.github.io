<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use App\Questions;
use App\Answers;
use App\UserAnswers;
use App\UserExam;
use App\User;
use App\Categories;
use App\ExamDetails;
use App\Groups;
use App\Feedbacks;

use Auth;

class QuestionController  extends Controller
{


    public function index(){
    	 $data['questions_list']=Questions::with('group','right_answer')->get();
    	return view('admin/question',$data);
    	
    }

    public function question_form(){
       $data['categories_list']=Categories::get();
       $data['groups_list']=Groups::get();

    	return view('admin/add_question',$data);
    }

    public function add_question(Request $request){
        

        $request->validate([
            'question'=>'required',
            'category_id' => 'required',
            'group_id' => 'required',
            'ans_option' => 'required',
            'option2' => 'required',
            'option3' => 'required',
            'option4' => 'required'
          ]);

       
          $questions=new Questions;
          $questions->category_id=$request->category_id;
          $questions->group_id=$request->group_id;
          $questions->q_text=$request->question;
          $questions->q_status='A';
          $questions->ans_id=1;
          $questions->q_created_by=Auth::user()->id;
          $questions->save();
          $LastQuestionInsertId = $questions->q_id;




          $answers=new Answers;
          $answers->answers=$request->ans_option;
          $answers->ques_id=$LastQuestionInsertId;
          $answers->ans_created_by=Auth::user()->id;
          $answers->save();
          $LastAnswerInsertId=$answers->ans_id;

          $questions = Questions::find($LastQuestionInsertId);
          $questions->ans_id =$LastAnswerInsertId;
          $questions->save();

         


          $answers=new Answers;
          $answers->answers=$request->option2;
          $answers->ques_id=$LastQuestionInsertId;
          $answers->ans_created_by=Auth::user()->id;
          $answers->save();

          $answers=new Answers;
          $answers->answers=$request->option3;
          $answers->ques_id=$LastQuestionInsertId;
          $answers->ans_created_by=Auth::user()->id;
          $answers->save();

          $answers=new Answers;
          $answers->answers=$request->option4;
          $answers->ques_id=$LastQuestionInsertId;
          $answers->ans_created_by=Auth::user()->id;
          $answers->save();

          return redirect()->route('admin/question_management');
           
    }

    public function user_answers(Request $request){
       
        for($i=0;$i<($request->total_question);$i++){
        
            $questions='questions_'.$i;
            $answers='answers_'.$i;
            
            $user_answers=new UserAnswers;
            $user_answers->u_id=$request->user_id;
            $user_answers->exam_id=$request->exam_id;
            $user_answers->q_id=$request->$questions;
            $user_answers->user_option_id=$request->$answers;
            $user_answers->save();
        }
 

        $user_exam=new UserExam;
        $user_exam->user_id=$request->user_id;
        $user_exam->exam_id=$request->exam_id;
        $user_exam->is_completed='Y';
        $user_exam->save();

        // $exam_details=ExamDetails::where('e_id',$request->exam_id)->update(['is_completed' =>'Y']);

    

        return redirect()->route('admin/question/user_result',['exam_id'=>$request->exam_id]);


    }

    public function delete_question(Request $request){

      $ques_id=$request->route('ques_id');
      $exam_details=Questions::where('q_id',$ques_id)->delete();
      return redirect()->route('admin/question_management');

    }


    public function user_result(Request $request){
    
     $exam_id=$request->route('exam_id');

     $result['user_ques_ans']=UserAnswers::with('questions_rel','manyanswers')->where('exam_id',$exam_id)->where('u_id',Auth::user()->id)->get();
     $data['correct_result']=DB::table('useranswers as ua')
                              ->join('questions as q', function($join){
                                $join->on('ua.q_id', '=', 'q.q_id')
                                     ->on('ua.user_option_id', '=', 'q.ans_id');
                              })
                            ->where('ua.u_id',Auth::user()->id)
                            ->where('ua.exam_id',$exam_id)
                            ->get();


       if(empty($data['correct_result'])){
         $data['correct_result']=0;
       }

      $data['total_question']=UserAnswers::where('u_id',Auth::user()->id)->where('exam_id',$exam_id)->get();
      $result['correct_result']=count($data['correct_result']);
      $result['total_question']=count($data['total_question']);


     // dd($result);

        

        return view('welcome_result',$result);
    }

    public function feedbackform(Request $request){
      $feedback=new Feedbacks;
      $feedback->f_comment=$request->f_comment;
      $feedback->user_id=Auth::user()->id;
      $feedback->save();
      return redirect()->back();

    }

    
}
