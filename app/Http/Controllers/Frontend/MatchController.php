<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Questions;
use App\QuestionModules;
use App\Exams;
use App\UserExam;
use Carbon\Carbon;
use App\ExamSchool;

use Auth;


class MatchController extends Controller
{
    public function index(){

    	 
		 $school_id=Auth::user()->school_id;
		 $class_id=Auth::user()->class_id;
		 $exam_attempted=Auth::user()->exam_attempted;
		
		
		$examdetails=Exams::where('class_id',$class_id)->where('e_status','A')->where('e_date',date('Y-m-d'))->orderBy('e_id', 'DESC')->first();
		
		if(!empty($examdetails)){
			$exam_id=$examdetails->e_id;
			$check_user=ExamSchool::where('s_id',$school_id)->where('e_id',$exam_id)->first();
            if(!empty($check_user)){

             $userexam_check=UserExam::where('user_id',Auth::user()->id)->where('exam_id',$exam_id)->where('is_completed','Y')->first();
             // dd($userexam_check);
             
 			if(empty($userexam_check)){
              $start_time =str_replace(':', '',$examdetails['e_start_time']);
              $end_time =str_replace(':', '',$examdetails['e_end_time']);
              $current_time =str_replace(':', '',date("H:i"));

              if($examdetails['e_date']==date("Y-m-d")){

	              	if($start_time<=$current_time &&  $end_time >=$current_time){

	              	  $quesmodule=QuestionModules::where('m_id',$examdetails['module_id'])->first();
			
				 	  $ques_ids=$quesmodule['ques_ids'];
				 	  $ques_ids=explode(',', $ques_ids);

				 	  $data['questions']=Questions::with('manyanswers')->find($ques_ids);
				 	  // dd($data['questions']);
				 	  $exam_id=$examdetails['e_id'];
				 	  $data['exam_id']=$exam_id;
				 	  $data['end_time']=$examdetails['e_end_time'];
				 	  $data['start_time']=$examdetails['e_start_time'];

			     	 	
		     	 	
				 	}elseif($start_time>$current_time){
				 		$data['session']="Wait for your session start!";
				 	    $data['start_time']=$examdetails['e_start_time'];

				 	}else{
				 		$data['session']="Sorry Exam session has been expired";
				 	}
              }

		 }else{
		 	$data['exam_attempted']="Sorry,already attempted";
		 }

            }

        }else{
      
        	$data['exam_attempted']="Sorry,Nothing Schedule Yet";
        }

		
		
		  return view('welcome',$data);

		 }
		


				
    
}
