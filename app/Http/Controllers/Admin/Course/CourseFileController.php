<?php

namespace App\Http\Controllers\Admin\Course;

use Illuminate\Http\Request;
use App\Models\Course\CourseFile;
use App\Http\Controllers\Controller;
use App\Models\Course\Course;
use RealRashid\SweetAlert\Facades\Alert;

class CourseFileController extends Controller
{


    public function index(){
        $course_files= CourseFile::all();
        $courses= Course::all();
        return view('admin.Course.file.index' , compact(['course_files' , 'courses' ]));
    }


    public function create(){
        $courses=Course::where([  ['status' , 'active'], ])->get();
        return view('admin.Course.file.create' , compact(['courses'  ]) );
    }

    public function edit($id){
        $course_file=CourseFile::find($id);
        return view('admin.Course.file.edit' , compact(['course_file'  ]));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'text' => 'required',
        ]);
        $data = $request->all();
        $data['image']  =  uploadFile($request->file('image'),'images/course_files','');

       CourseFile::create($data);
       Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
        return redirect()->route('admin.Course.file.index');
    }

    public function show($id)
    {
        //
    }



    public function update(Request $request, $id , CourseFile $course_file){
        $request->validate([
            'name' => 'required',
            'text' => 'required',
        ]);
        $course_file=CourseFile::find($id);
        $data = $request->all();
        $data['image']= $course_file->image;
        $data['image']  =  uploadFile($request->file('image'),'images/course_files',$course_file->image);
        $course_file->update($data);
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
    }


    public function destroy($id , Request $request){
        CourseFile::destroy($request->id);
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return back();
    }

    public function status(Request $request , $id){
        $status=Change_status($id,'course_files');
        return back();
    }




}
