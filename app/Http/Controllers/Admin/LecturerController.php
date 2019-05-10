<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\LecturerModel;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

use App\Http\Requests\cntt_admin\Lecturer\CreateLecturer;
use App\Http\Requests\cntt_admin\Lecturer\EditLecturer;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lecturer = new LecturerModel;
        $lecturerList = $lecturer->listLecturer();
        return view('cntt_admin/mod_lecturer/list',['lecturerList' => $lecturerList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cntt_admin/mod_lecturer/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateLecturer $request)
    {
        $lecturer = new LecturerModel;
        $chkSuccess = $lecturer->addLecturer($request);
        if ($chkSuccess == true) {
            $file = Image::make($request->file('imgLecturer')->getRealPath());
            $dt = date('Y-m-d-His');
            $file->resize(270,370);
            $file->save('public/upload/imgLecturer/'.$dt.'-'.$request->imgLecturer->getClientOriginalName());
        }
        return redirect()->route('admin.lecturer.list')->with('success', 'Thêm giảng viên thành công');
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
    public function edit($id)
    {
        $lecturer = new LecturerModel;
        $editLecturer = $lecturer->editLecturer($id) ;

        return view('cntt_admin/mod_lecturer/edit',['editLecturer' => $editLecturer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditLecturer $request, $id)
    {
        $preImg = LecturerModel::find($id)->cnttLecturerImage;

        $lecturer = new LecturerModel;
        $chkSuccess = $lecturer->updateLecturer($request,$id) ;
        $dt = date('Y-m-d-His');
        if (($request->imgLecturer) && $chkSuccess == true ) {
            File::delete('public/upload/imgLecturer/'.$preImg);
            $file = Image::make($request->file('imgLecturer')->getRealPath());
           
            $file->resize(270,370);
            $file->save('public/upload/imgLecturer/'.$dt.'-'.$request->imgLecturer->getClientOriginalName());
        }

        return redirect()->route('admin.lecturer.list')->with('success', 'Cập nhật giảng viên thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lecturer = new LecturerModel;
        $lecturer->deleteLecturer($id);

        return redirect()->route('admin.lecturer.list')->with('success', 'Giảng viên đã được xóa');
    }
}
