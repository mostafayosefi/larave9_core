<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Course\Course;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class FetchController extends Controller
{


    public function price( $mymodel , $value , $course_id){
        $course=Course::find($course_id);
       return view('admin.fetch.price' , compact(['mymodel' ,'value' , 'course'  ]));
   }



}
