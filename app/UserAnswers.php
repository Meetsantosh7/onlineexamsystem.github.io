<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAnswers extends Model
{
    protected  $table= 'useranswers';
    protected $primaryKey = 'a_id';
    

    public function manyanswers(){
        return $this->hasMany('App\Answers','ques_id','q_id');
    }

  
    public function questions_rel(){
        return $this->belongsTo('App\Questions','q_id','q_id');
    }
    
   
   
    
}


