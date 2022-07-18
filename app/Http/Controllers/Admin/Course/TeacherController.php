<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use App\Models\Course\Teacher;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TeacherController extends Controller
{


    public function index(){
        $teachers= Teacher::orderby('id','desc')->get();
        return view('admin.Course.teacher.index' , compact(['teachers'  ]));
    }


    public function create(){
        return view('admin.Course.teacher.create' );
    }

    public function edit($id){
        $teacher=Teacher::find($id);
        return view('admin.Course.teacher.edit' , compact(['teacher'  ]));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'education' => 'required',
            'short' => 'required',
            'about' => 'required',
        ]);
        $data = $request->all();
        $data['family']  =  'null';
        $data['status']  =  'active';
        $data['image']  =  uploadFile($request->file('image'),'images/teachers','');



       Teacher::create($data);
       Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
        return redirect()->route('admin.course.teacher.index');
    }

    public function show($id)
    {
        //
    }



    public function update(Request $request, $id , Teacher $teacher){

        $request->validate([
            'name' => 'required',
            'education' => 'required',
            'short' => 'required',
            'about' => 'required',
        ]);
        $teacher=Teacher::find($id);
        $data = $request->all();
        $data['image']= $teacher->image;
        $data['image']  =  uploadFile($request->file('image'),'images/teachers',$teacher->image);
        $teacher->update($data);
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
    }


    public function destroy($id , Request $request){
        Teacher::destroy($request->id);
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return back();
    }

    public function status(Request $request , $id){
        $status=Change_status($id,'teachers');
        return back();
    }




}
