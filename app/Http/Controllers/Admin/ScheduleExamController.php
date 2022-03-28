<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Gate;
use App\User;
use App\Exams;
use App\Schools;
use App\Categories;
use App\Groups;
use App\QuestionModules;
use App\Classes;
use App\ExamSchool;





class ScheduleExamController extends Controller
{

    public function index()
    {

        if(!Gate::allows('isAdmin')){
            abort(404,"Sorry, You can do this actions");
        }
        
        $data['school_list']=Schools::get();
        $data['categories']=Categories::get();
        $data['class_list']=Classes::get();
        $data['group_list']=Groups::get();
        $data['module_list']=QuestionModules::get();
        // dd("i ma here");
        $data['exam_list']=Exams::with('school_rel','module_rel','class_rel')->get();
        // dd($data['exam_list']);

        

       return view('admin/schedule',$data);
    }
        
 
    public function add_schedule_exam(Request $request){

     
      $exam_details=new Exams;
      $exam_details->e_name=$request->exam_name;
      $exam_details->class_id=$request->class_id;
      $exam_details->module_id=$request->module_id;
      $exam_details->e_duration=1;
      $exam_details->e_start_time=$request->exam_s_time;
      $exam_details->e_end_time=$request->exam_e_time;
      $exam_details->e_created_by=Auth::user()->id;
      $exam_details->e_date=$request->exam_date;
      $exam_details->e_date=date('Y-m-d');
      $exam_details->save();
      $Last_exam_details_id = $exam_details->e_id;
      
      foreach ($request->school_id as $key => $value){
       
        $school_exam=new ExamSchool;
        $school_exam->e_id=$Last_exam_details_id;
        $school_exam->s_id=$value;
        $school_exam->save();
      }
      

    
      return redirect()->route('admin/question_module');

    }

    public function delete_exam(Request $request){

      $exam_id=$request->route('exam_id');
      $exam_details=Exams::where('e_id',$exam_id)->delete();
      return redirect()->route('admin/schedule_exam');

    }
}
