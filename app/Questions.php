<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected  $table= 'questions';
    protected $primaryKey = 'q_id';

     
    public function manyanswers(){
        return $this->hasMany('App\Answers','ques_id','q_id');
    }

     public function group(){
        return $this->belongsTo('App\Groups','group_id','g_id');
    }

     public function right_answer(){
        return $this->belongsTo('App\Answers','ans_id','ans_id');
    }
    
}


