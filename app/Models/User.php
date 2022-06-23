<?php

namespace App\Models;

use App\Models\Ticket;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Course\CourseRequest;
use App\Models\Course\Exam;
use App\Models\Course\ExamOnline;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */



    protected $fillable = [
        'name', 'email', 'password', 'username', 'tell', 'address', 'image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function tickets()
    {
        return $this->hasMany(Ticket::class , 'user_id' );
    }


    public function course_requests()
    {
        return $this->hasMany(CourseRequest::class , 'user_id' );
    }
 

    public function exam_onlines()
    {
        return $this->hasMany(ExamOnline::class , 'user_id' );
    }



}
