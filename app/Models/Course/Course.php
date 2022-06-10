<?php

namespace App\Models\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $fillable = [
        'name', 'type', 'short' ,'image' , 'status' , 'text', 'price', 'teacher_id','course_type_id',
    ];


    public function course_type() {
        return $this->belongsTo(CourseType::class );
    }

    public function teacher() {
        return $this->belongsTo(Teacher::class );
    }

    public function course_files()
    {
        return $this->hasMany(CourseFile::class , 'course_id' );
    }

    public function course_requests()
    {
        return $this->hasMany(CourseRequest::class , 'course_id' );
    }





}
