<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{

    protected $fillable = [
        'name'  ,
        'status'  ,
   ];

   
public function course_request()
{
    return $this->hasOne(CourseRequest::class , 'price_type_id' );
} 



}
