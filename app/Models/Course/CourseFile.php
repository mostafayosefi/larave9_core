<?php

namespace App\Models\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseFile extends Model
{

    protected $fillable = [
        'name', 'link' ,'image'   , 'text', 'course_id',
    ];



    public function course() {
        return $this->belongsTo(Course::class );
    }



}
