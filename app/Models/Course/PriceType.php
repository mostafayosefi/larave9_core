<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceType extends Model
{

    protected $fillable = [
        'name'  ,
   ];


   public function course() {
    return $this->belongsTo(ExamOnline::class );
}



 }
