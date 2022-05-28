<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{


    public function dashboard(){
        $dash_id  = Auth::guard('user')->user()->id;
        return view('user.dashboard.index' , compact(['dash_id']));
    }


}
