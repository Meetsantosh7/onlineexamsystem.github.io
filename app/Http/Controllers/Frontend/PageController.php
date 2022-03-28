<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class PageController extends Controller
{
    

    public function about_us(){

    return view('frontend/about-us');
       
  

    }

    
}
