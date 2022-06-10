<?php

namespace App\Http\Controllers\Admin\Course;

use Illuminate\Http\Request;
use App\Models\Course\Course;
use App\Http\Controllers\Controller;
use App\Models\Course\CourseType;
use App\Models\Course\Teacher;
use RealRashid\SweetAlert\Facades\Alert;

class CourseController extends Controller
{


    public function index(){
        $courses= Course::all();
        return view('admin.Course.course.index' , compact(['courses'  ]));
    }


    public function create(){
        $course_types=CourseType::all();
        $teachers=Teacher::where([  ['status' , 'active'], ])->get();
        return view('admin.Course.course.create' , compact([ 'course_types', 'teachers' ]) );
    }

    public function edit($id){
        
        $course=Course::find($id);
        $course_types=CourseType::all();
        $teachers=Teacher::where([  ['status' , 'active'], ])->get();
        return view('admin.Course.course.edit' , compact([ 'course' , 'course_types', 'teachers' ]) );
 
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required', 
            'short' => 'required',
            'text' => 'required',
        ]);

        $data = $request->all();
        $data ['type']='null';
        $data ['price']='null';
        $data['image']  =  uploadFile($request->file('image'),'images/courses','');

       Course::create($data);
       Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
        return redirect()->route('admin.course.course.index');
    }

    public function show($id)
    {
        
        $course=Course::find($id); 
        return view('admin.Course.course.show' , compact([ 'course'  ]) );
    }



    public function update(Request $request, $id , Course $course){
       
        $request->validate([
            'name' => 'required', 
            'short' => 'required',
            'text' => 'required',
        ]);
        $course=Course::find($id);
        $data = $request->all();
        $data['image']= $course->image;
        $data['image']  =  uploadFile($request->file('image'),'images/courses',$course->image);
        $course->update($data);
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
    }


    public function destroy($id , Request $request){
        Course::destroy($request->id);
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return back();
    }

    public function status(Request $request , $id){
        $status=Change_status($id,'courses');
        return back();
    }




}
