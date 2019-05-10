<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\MajorModel;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $major = new MajorModel;
        $majorList = $major->listMajor();
        return view('cntt_admin/mod_major/content/list',['majorList' => $majorList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $major = new MajorModel;
        $majorEdit = $major->editMajor($id) ;

        return view('cntt_admin/mod_major/content/edit',['majorEdit' => $majorEdit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $preImg = MajorModel::find($id)->cnttMajorImage;
        $major = new MajorModel;
        
        $chkSuccess = $major->updateMajor($request,$id) ;
        $dt = date('Y-m-d-His');
        if (($request->imgMajor) && $chkSuccess == true ) {

            File::delete('public/upload/imgMajor/'.$preImg);
            $file = Image::make($request->file('imgMajor')->getRealPath());
            
            $file->save('public/upload/imgMajor/'.$dt.'-'.$request->imgMajor->getClientOriginalName());
        }

        return redirect()->route('admin.major.list')->with('success', 'Cập nhật chuyên ngành thành công');
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
}
