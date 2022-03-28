<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exams extends Model
{
    protected  $table= 'exams';
    protected $primaryKey = 'e_id';

    
    public function school_rel(){
        return $this->belongsToMany('App\Schools','exam_school','e_id','s_id');
    }
    

    public function module_rel(){
        return $this->belongsTo('App\QuestionModules','module_id','m_id');
    }

    public function class_rel(){
        return $this->belongsTo('App\Classes','class_id','cls_id');
    }
   
    
}


