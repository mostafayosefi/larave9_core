<?php

namespace App\Models\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{

    protected $fillable = [
          'name'   ,  'text'  ,  'image'  ,
    ];

 


    public function exam_questions()
    {
        return $this->hasMany(ExamQuestion::class , 'exam_id' );
    }



}
