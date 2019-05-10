<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\CooperateModel;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class CooperateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cooperate = new CooperateModel;
        $cooperateList = $cooperate->listCooperate();
        return view('cntt_admin/mod_cooperate/list',['cooperateList' => $cooperateList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cntt_admin/mod_cooperate/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cooperate = new CooperateModel;
        $chkSuccess = $cooperate->addCooperate($request);
        if ($chkSuccess == true) {
            $file = Image::make($request->file('imgCooperate')->getRealPath());
            $dt = date('Y-m-d-His');
            $file->resize(270,370);
            $file->save('public/upload/imgCooperate/'.$dt.'-'.$request->imgCooperate->getClientOriginalName());
        }
        return redirect()->route('admin.cooperate.list')->with('success', 'Thêm giảng viên thành công');
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
        $cooperate = new CooperateModel;
        $editCooperate = $cooperate->editCooperate($id) ;

        return view('cntt_admin/mod_cooperate/edit',['editCooperate' => $editCooperate]);
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
        $preImg = CooperateModel::find($id)->cnttCooperateImage;

        $cooperate = new CooperateModel;
        $chkSuccess = $cooperate->updateCooperate($request,$id) ;
        $dt = date('Y-m-d-His');
        if (($request->imgCooperate) && $chkSuccess == true ) {
            File::delete('public/upload/imgCooperate/'.$preImg);
            $file = Image::make($request->file('imgCooperate')->getRealPath());
           
            $file->resize(270,370);
            $file->save('public/upload/imgCooperate/'.$dt.'-'.$request->imgCooperate->getClientOriginalName());
        }

        return redirect()->route('admin.cooperate.list')->with('success', 'Cập nhật giảng viên thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cooperate = new CooperateModel;
        $cooperate->deleteCooperate($id);

        return redirect()->route('admin.cooperate.list')->with('success', 'Giảng viên đã được xóa');
    }
}
