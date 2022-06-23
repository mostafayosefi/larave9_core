<?php

namespace App\Models\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseType extends Model
{


    protected $fillable = [
        'status'   , 'name',
    ];


    public function courses()
    {
        return $this->hasMany(Course::class , 'course_type_id' );
    }



}
