<?php

namespace App\Models\Course;
use App\Models\Course\ExamOnline;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExamUser extends Model
{

    protected $fillable = [
       'exam_online_id'  ,
  ];

  public function exam_online() {
    return $this->belongsTo(ExamOnline::class );
}


public function exam_respneses()
{
    return $this->hasMany(ExamResponse::class , 'exam_user_id' );
}





}
