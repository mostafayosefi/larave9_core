<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Rules\Uniqemail;
use Illuminate\Http\Request;
use App\Models\Loginhistorie;
use Illuminate\Validation\Rule;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

  /*       User::create([
            'name' => 'Name34',
            'email' => 'nnn33@gmail.com',
            'password' => Hash::make('123456') ,
        ]); */

        $users=User::all();



return view('admin.user.index' , compact(['users'  ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create' );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username,$request->username',
            'email' => 'required|unique:users,email,$request->email',
            'password' => 'required| min:4 |confirmed',
            'password_confirmation' => 'required| min:4'
        ]);


        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password) ,
        ]);

        Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
        return redirect()->route('admin.user.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $admin = $user;

        $subreferal = User::where('referal' , $user->id )->get();
        $inviteds = User::find($admin->referal);
        $loginhistories=Loginhistorie::where('user_id',$user->id)->get();

        return view('admin.user.edit' , compact([ 'admin' , 'subreferal', 'inviteds' , 'loginhistories' ]) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

/*
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'emails' => [new Uniqemail],
            'tell' => 'required',
        ]); */
/*
        $request->validate([
            'username' => Rule::unique('users')->where(function ($query) {
                return $query->where('id', 3) ;
            }),
        ]); */

        return secret_user($request , $user , 'update'  , 'users' );


    }




    public function secret(Request $request, User $user)
    {
        return secret_user($request , $user , 'secret'  , 'users'  );


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }




    public function status(Request $request , $id){
$status=Change_status($id,'users');
return back();
    }




    public function status_api(Request $request , $id){
$status=Change_status($id,'apiwebservice');
return back();
    }



    public function login($id)
    {


        $result = Auth::guard('user')->loginUsingId($id);

        Alert::success('با موفقیت انجام شد', 'ورود شما باموفقیت انجام شد');

        return redirect()->route('user.dashboard.index');


    }





}
