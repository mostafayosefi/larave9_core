<?php

namespace App\Models\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    protected $fillable = [
        'name', 'family', 'education' ,'short' ,'image' , 'status' , 'about',  
    ];


    public function courses()
    {
        return $this->hasMany(Course::class , 'teacher_id' );
    }





}
