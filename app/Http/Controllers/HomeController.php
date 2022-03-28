<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Auth;
use  Questions;
use  Schedule;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    { 
     
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        
        if(Auth::user()->user_type=="teacher"){
            if(Auth::user()->status=="A"){
               return view('admin/dashboard');
            }else{
             return view('frontend/welcome');
            }

        }

        if(Auth::user()->user_type=="student"){
            return redirect()->route('/student');
        }
    
    }
}
