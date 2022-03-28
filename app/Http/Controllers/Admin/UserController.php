<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class UserController extends Controller
{
    public function index(){

     $data['list_teacher']=User::with('school_rel')->where('user_type','teacher')->orderBy('id','DESC')->get();

     // dd($data['list_teacher']);

     return view('admin/user',$data);
    	
    }

    public function user_status(Request $request){
    	$status=$request->segment(3);
    	$user_id=$request->segment(4);
    	$user_status = User::where('id',$user_id)->first();
        $user_status->status=$status;
        $user_status->save();
    	return redirect()->route('admin/user_management');
    }
}
