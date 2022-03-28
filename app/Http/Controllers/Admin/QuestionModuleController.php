<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use App\Questions;
use App\Answers;
use App\UserAnswers;
use App\QuestionModules;
use App\Categories;
use App\Groups;
use App\User;
use Auth;

class QuestionModuleController  extends Controller
{


    public function index(){
      $data['categories_list']=Categories::get();
      $data['groups_list']=Groups::get();
    	$data['module_list']=QuestionModules::all();
    	return view('admin/question_module',$data);
    	
    }


    public function question_search(Request $request){
    

      $data['fetch_questions']= Questions::where('category_id',$request->category_id)->where('group_id',$request->group_id)->get();
        return view('admin/search_module',$data);

      
    }

    public function module_add(Request $request){

      $question_ids =implode(',', $request->question_ids);
      $store_module=new QuestionModules;
      $store_module->m_name=$request->module_name;
      $store_module->ques_ids=$question_ids;
      $store_module->save();

      return redirect()->route('admin/question_module');
    }

}
