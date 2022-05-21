<?php

use App\Models\User;
use App\Models\Ticket;
use App\Models\Wallet;

use App\Models\Setting;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;
use App\Models\Loginhistorie;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;



if(!function_exists('isActive'))
{
    function isActive($key , $activeClassName = 'active')
    {
        if (is_array($key))
        {
            return in_array(Route::currentRouteName() , $key) ? $activeClassName : '';
        }
        return Route::currentRouteName() == $key ? $activeClassName : '';
    }
}


if(!function_exists('isShow'))
{
    function isShow($key , $showClassName = 'show')
    {
        if (is_array($key))
        {
            return in_array(Route::currentRouteName() , $key) ? $showClassName : '';
        }
        return Route::currentRouteName() == $key ? $showClassName : '';
    }
}







//get Status EmployerPackage
if(! function_exists('getStatusEmployerPackage') ) {

    function getStatusEmployerPackage($status)
    {
        if($status == 'active')
        {
            echo '<span class="badge badge-primary">فعال</span>';
        }
        elseif($status == 'inactive')
        {
            echo '<span class="badge badge-danger">غیرفعال</span>';
        }
        else
        {
            echo '<span class="badge badge-info">بررسی شده</span>';
        }
    }

}





if(! function_exists('getstatusdefault') ) {

    function getstatusdefault($status)
    {



/*
        if($status == 'active')
        {
            echo '<i class="fas fa-toggle-on"  ></i> Default';

        }
        elseif($status == 'inactive')
        {
            echo '';
        }
 */

        if($status == 'active')
        {
            echo '<div class="form-check form-check-inline">
            <label class="form-check-label"><input type="radio"   disabled checked class="form-check-input"> پیش فرض </label>
             </div>  ';

        }
        elseif($status == 'inactive')
        {
            echo '<div class="form-check form-check-inline">
            <label class="form-check-label"><input type="radio"   disabled   class="form-check-input">   </label>
             </div> ';
        }



    }

}



if(! function_exists('uploadFileArray') ) {
    function uploadFileArray($file,$path){
if($file){
  if(is_array($file)){
      foreach($file as $part) {
          if($part){

            $current_timestamp = \Carbon\Carbon::now()->timestamp;
            $imagePath = "/upload/$path/";
            $filename = $current_timestamp . $part->getClientOriginalName();
            $file = $part->move(public_path($imagePath) , $filename);
            $filearray[]=$imagePath.$filename;

          }  }  }
          return $filearray;

 }else{
    //  return $defaultfile;
 }
    }

}


if(! function_exists('uploadFile') ) {

    function uploadFile($file,$path,$defaultfile)
    {
 if($file){
        $current_timestamp = \Carbon\Carbon::now()->timestamp;
        $imagePath = "/upload/$path/";
        $filename = $current_timestamp . $file->getClientOriginalName();
        $file = $file->move(public_path($imagePath) , $filename);
        return $imagePath.$filename;

 }else{
     return $defaultfile;
 }
    }

}







if(! function_exists('Change_status') ) {
    function Change_status($id, $table)
    {

        if($table=='users'){
            $table= User::find($id);
            Alert::success('تغییر وضعیت اکانت با موفقیت انجام شد', 'تغییرات وضعیت اکانت با موفقیت انجام شد');
        }




        if($table->status=='active'){$status='inactive';}
        elseif($table->status=='inactive'){$status='active';}
        $flag = $table->update([ 'status' => $status ]);
        return $flag;


    }
}





 if(! function_exists('date_frmat_mnth') ) {
    function date_frmat_mnth($date)
    {
        $date = Jalalian::forge($date)->format('%A, %d %B %Y');
        return $date;

    }

}
//get date_frmat
if(! function_exists('date_frmat') ) {
    function date_frmat($date)
    {
        $date = Jalalian::forge($date)->format('Y/m/d ساعت H:i a');
        return $date;
        // return Verta($date)->format('Y/m/d ساعت H:i a');

    }

}


 if(! function_exists('date_frmat_ymd') ) {
    function date_frmat_ymd($date)
    {
        $date = Jalalian::forge($date)->format('Y/m/d');
        return $date;

    }

}








if(! function_exists('Mywallet') ) {
    function Mywallet($user_id,$operator)
    {
        $query=Wallet::query()->where([
            ['user_id' , '=' ,$user_id],
            ['status' , '=' ,'active'],
        ]);
        $my_inc=$query->where([
            ['flag' , '=' ,'inc'],
            ])->sum('price');

            $my_dec=Wallet::where([
                ['user_id' , '=' ,$user_id],
                ['status' , '=' ,'active'],
                ['flag' , '=' ,'dec'],
            ])->sum('price');

                $mycharge= $my_inc - $my_dec;
                if($operator=='inc'){  return $my_inc;}
                if($operator=='dec'){  return $my_dec;}
                if($operator=='mycharge'){  return $mycharge;}

    }
}

if(! function_exists('linkdomain') ) {
    function linkdomain($domain,$suffix)
    {

 $countDot=0;
         foreach (count_chars($domain, 1) as $char => $count) {
            if(chr($char) =='.'){   $countDot=$count; }
         }
 if($countDot=='0') {
    return $domain.'.'.$suffix;
  }else{
      return $domain;
    $headers = explode('.', $domain);
    $headers['0'];
  }

  }
}



//get Status EmployerPackage
if(! function_exists('getStatusEmployerPackage') ) {

    function getStatusEmployerPackage($status)
    {
        if($status == 'active')
        {
            echo '<span class="badge badge-success"><i data-feather="check-circle"></i> &nbsp; فعال </span>';
        }
        elseif($status == 'inactive')
        {
            echo '
            <span class="badge badge-warning"><i data-feather="x-circle"></i> &nbsp; غیرفعال </span> ';
        }
        else
        {
            echo '<span class="badge badge-info">بررسی شده</span>';
        }
    }

}




if(! function_exists('update_lastlogin') ) {
    function update_lastlogin($id, $key)
    {




        if($key=='login'){
            $myuser =  User::addSelect(['last_login' => Loginhistorie::select('created_at')
            ->whereColumn('user_id', 'users.id')
            ->where('users.id' , $id)
            ->orderByDesc('created_at')
            ->limit(1)
        ])->first();
        return $myuser->last_login;}


        if($key=='ip'){
            $myuser =  User::addSelect(['last_ip' => Loginhistorie::select('ip')
            ->whereColumn('user_id', 'users.id')
            ->where('users.id' , $id)
            ->orderByDesc('created_at')
            ->limit(1)
        ])->first();
        return $myuser->last_ip;}

    }

}




    if(! function_exists('secret_user') ) {
        function secret_user(Request $request , $user , $oper)
        {


            if($oper=='secret'){

                session(['err' => '1']);
                $request->validate([
                    'password' => 'required| min:4 |confirmed',
                    'password_confirmation' => 'required| min:4'
                ]);
        $user->update([ 'password' => Hash::make($request->password) ]);
        Alert::success('با موفقیت ویرایش شد', 'رمزعبور با موفقیت تغییر پیدا کرد ');
            }


            if($oper=='update'){
                $request->session()->forget('err');

                $request->validate([
                    'name' => 'required',
                    'username' => ['required',new Uniqemail('users','username',$user->id)] ,
                    'email' => ['required' , 'email',new Uniqemail('users','email',$user->id)] ,
                    'tell' => ['required', 'regex:/^09[0-9]{9}$/' ,new Uniqemail('users','tell',$user->id)] ,
                ]);


                 $data = $request->all();
                $data['image']= $user->image;
                $data['image']  =  uploadFile($request->file('image'),'images/users',$user->image);


       $m =  $user->update($data);
         Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');


            }


     return back();



        }
    }






    if(! function_exists('flage_price') ) {
        function flage_price($price)
        {



$exit=number_format($price).' ريال ';    return  $exit;



        }
    }



    if(! function_exists('count_dashboard') ) {
        function count_dashboard($dash_id,$mytable)
        {



if($mytable=='user'){ $query=User::query()->where([ ['id' , '<>' ,'1'], ]);}
if($mytable=='company_request'){ $query=CompanyRequest::query()->where([ ['id' , '<>' ,'0'], ]);}
if($mytable=='new_company_request'){ $query=CompanyRequest::query()->where([ ['id' , '<>' ,'0'], ['fromshow' , '=' ,'unread'], ]);}
if($mytable=='new_company_request_admin'){ $query=CompanyRequest::query()->where([ ['id' , '<>' ,'0'], ['toshow' , '=' ,'unread'], ]);}
if($mytable=='requestbrand'){ $query=Requestbrand::query()->where([ ['id' , '<>' ,'0'], ]);}
if($mytable=='new_requestbrand'){ $query=Requestbrand::query()->where([ ['id' , '<>' ,'0'], ['fromshow' , '=' ,'unread'], ]);}
if($mytable=='new_requestbrand_admin'){ $query=Requestbrand::query()->where([ ['id' , '<>' ,'0'], ['toshow' , '=' ,'unread'], ]);}




if($mytable=='contact'){ $query=Contact::query()->where([ ['id' , '<>' ,'0'], ]);}
if($mytable=='domain'){ $query=Domain::query()->where([ ['id' , '<>' ,'0'], ]);}
if($mytable=='renew'){ $query=Renew::query()->where([ ['id' , '<>' ,'0'], ]);}
if($mytable=='transfer'){ $query=Transfer::query()->where([ ['id' , '<>' ,'0'], ]);}
if($mytable=='nameserver'){ $query=Nameserver::query()->where([ ['id' , '<>' ,'0'], ]);}
if($mytable=='ticket'){ $query=Ticket::query()->where([ ['id' , '<>' ,'0'], ]);}
if($mytable=='new_ticket'){ $query=Ticket::query()->where([ ['id' , '<>' ,'0'], ['fromshow' , '=' ,'unread'], ]);}
if($mytable=='new_ticket_admin'){ $query=Ticket::query()->where([ ['id' , '<>' ,'0'], ['toshow' , '=' ,'unread'], ]);}

$count=$query->count();

if($dash_id!='all'){$count=$query->where([  ['user_id' , '=' ,$dash_id],  ])->count();}

return $count;

        }
    }



    if(! function_exists('now_time') ) {
        function now_time( $value)
        {
            return now()->addYears($value)->format('Y-m-d');
        }
    }



    if(! function_exists('time_fake') ) {
        function time_fake( $endtime ,$value)
        {


            $modifier= '-'.$value.' days';
            $modifier .= '-9 hourse';
        $date = strtotime($endtime);
        $newdate = date('Y-m-d h:i',strtotime($modifier,$date));
        return $newdate;

        }
    }


