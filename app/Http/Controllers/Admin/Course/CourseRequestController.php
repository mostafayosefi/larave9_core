<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use App\Models\Course\Course;
use App\Models\Course\CourseRequest;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CourseRequestController extends Controller
{


    public function index(){
        $course_requests= CourseRequest::orderby('id','desc')->get();
        return view('admin.course.request.index' , compact(['course_requests'  ]));
    }


    public function create(){

        $users= User::orderby('id','desc')->get();
        $courses= Course::orderby('id','desc')->get();
        return view('admin.course.request.create', compact(['users' , 'courses'   ]) );
    }

    public function edit($id){
        $course_request=CourseRequest::find($id);
        $courses=Course::all();
        $users=User::all();
        return view('admin.course.request.edit' , compact(['course_request' , 'courses'  , 'users'  ]));
    }


    public function store(Request $request)
    {
        $data = $request->all();

       CourseRequest::create($data);
       Alert::success('با موفقیت ثبت شد', 'درخواست دوره با موفقیت ثبت شد');
        return redirect()->route('admin.course.request.index');
    }

    public function show($id)
    {
        //
    }



    public function update(Request $request, $id , CourseRequest $course_request){

        $course_request=CourseRequest::find($id);
        $data = $request->all();
        $course_request->update($data);
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
    }


    public function destroy($id , Request $request){
        CourseRequest::destroy($request->id);
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return back();
    }

    public function status(Request $request , $id){
        $status=Change_status($id,'course_requests');
        return back();
    }




}
