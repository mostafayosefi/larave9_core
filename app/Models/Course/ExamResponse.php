<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamResponse extends Model
{


    protected $fillable = [
        'exam_question_id', 'exam_user_id'  , 'myresponse'  , 'answerorigin'  , 'rwsult'  ,
  ];

  public function exam_user() {
    return $this->belongsTo(ExamUser::class );
}


public function exam_question()
{
    return $this->hasOne(ExamQuestion::class , 'exam_question_id' );
}



}
