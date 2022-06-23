<?php

namespace App\Models\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamQuestion extends Model
{

    protected $fillable = [
        'name', 'exam_id'  ,
  ];



  public function exam() {
    return $this->belongsTo(Exam::class );
}


public function exam_answers()
{
    return $this->hasMany(ExamAnswer::class , 'exam_question_id' );
}


public function exam_response() {
    return $this->belongsTo(ExamResponse::class );
}








}
