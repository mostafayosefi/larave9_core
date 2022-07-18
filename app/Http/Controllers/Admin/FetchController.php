<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FetchController extends Controller
{


    public function price( $value){
       return view('admin.fetch.price' , compact(['value'  ]));
   }



}
