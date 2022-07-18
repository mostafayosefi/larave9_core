<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use App\Models\Course\CourseType;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CourseTypeController extends Controller
{


    public function index(){
        $course_types= CourseType::all();
        return view('admin.Course.type.index' , compact(['course_types'  ]));
    }


    public function create(){
        return view('admin.Course.type.create' );
    }

    public function edit($id){
        $course_type=CourseType::find($id);
        return view('admin.Course.type.edit' , compact(['course_type'  ]));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $data = $request->all();

       CourseType::create($data);
       Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
        return redirect()->route('admin.course.type.index');
    }

    public function show($id)
    {
        //
    }



    public function update(Request $request, $id , CourseType $course_type){
        $request->validate([
            'name' => 'required',
        ]);
        $course_type=CourseType::find($id);
        $data = $request->all();
        $course_type->update($data);
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
    }


    public function destroy($id , Request $request){
        CourseType::destroy($request->id);
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return back();
    }

    public function status(Request $request , $id){
        $status=Change_status($id,'course_types');
        return back();
    }




}
