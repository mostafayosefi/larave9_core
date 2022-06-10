<?php

namespace App\Models\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{

    protected $fillable = [
          'name', 'user_id'  ,  'text'  ,  'image'  ,
    ];


    public function user() {
        return $this->belongsTo(User::class );
    }



    public function exam_questions()
    {
        return $this->hasMany(ExamQuestion::class , 'exam_id' );
    }



}
