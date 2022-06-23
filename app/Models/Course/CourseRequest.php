<?php

namespace App\Models\Course;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseRequest extends Model
{

    protected $fillable = [
        'status'   , 'user_id', 'course_id',
    ];


    public function course() {
        return $this->belongsTo(Course::class );
    }


    public function user() {
        return $this->belongsTo(User::class );
    }

    



}