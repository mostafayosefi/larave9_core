<?php

namespace App\Models\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamOnline extends Model
{

    protected $fillable = [
        'user_id', 'exam_id'  ,
  ];



  public function user() {
    return $this->belongsTo(User::class );
}

public function exams()
{
    return $this->hasMany(Exam::class , 'exam_id' );
}

public function exam_user()
{
    return $this->hasOne(ExamUser::class , 'exam_online_id' );
}



}
