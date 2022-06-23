<?php

namespace App\Models\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamAnswer extends Model
{

    protected $fillable = [
        'name', 'answer'  , 'exam_question_id'  ,
  ];



  public function exam_answer() {
    return $this->belongsTo(ExamQuestion::class );
}



  }
