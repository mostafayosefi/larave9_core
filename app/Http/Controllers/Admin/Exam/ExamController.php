<?php

namespace App\Http\Controllers\Admin\Exam;

use App\Http\Controllers\Controller;
use App\Models\Course\Exam;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ExamController extends Controller
{


    public function index(){
        $exams= Exam::all();
        return view('admin.Exam.exam.index' , compact(['exams'  ]));
    }


    public function create(){
        return view('admin.Exam.exam.create' );
    }

    public function edit($id){
        $exam=Exam::find($id);
        return view('admin.Exam.exam.edit' , compact(['exam'  ]));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'text' => 'required',
        ]);
        $data = $request->all();
        $data['image']  =  uploadFile($request->file('image'),'images/exams','');

       Exam::create($data);
       Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
        return redirect()->route('admin.exam.exam.index');
    }

    public function show($id)
    {
        //
    }



    public function update(Request $request, $id , Exam $exam){
        $request->validate([
            'name' => 'required',
            'text' => 'required',
        ]);
        $exam=Exam::find($id);
        $data = $request->all();
        $data['image']= $exam->image;
        $data['image']  =  uploadFile($request->file('image'),'images/exams',$exam->image);
        $exam->update($data);
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
    }


    public function destroy($id , Request $request){
        Exam::destroy($request->id);
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return back();
    }

    public function status(Request $request , $id){
        $status=Change_status($id,'exams');
        return back();
    }




}
