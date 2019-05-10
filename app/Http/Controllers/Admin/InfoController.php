<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\InfoModel;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class InfoController extends Controller
{
    public function edit($id) {
        $info = new InfoModel;
        $infoGet = $info->infoGet($id);
        
        return view('cntt_admin.mod_info.edit',['infoGet' => $infoGet]);
    }

    public function update(Request $request, $id) {
        $preImg = InfoModel::find($id)->toArray();

        $info = new InfoModel;
        $chkSuccess = $info->infoUpdate($request,$id) ;
        $dt = date('Y-m-d-His');
        if ($chkSuccess == true) {
            if ($request->imgFavicon) {
                File::delete('public/upload/imgFavicon/'.$preImg['cnttInfoFavicon']);
                $file = Image::make($request->file('imgFavicon')->getRealPath());

                $file->save('public/upload/imgFavicon/'.$dt.'-'.$request->imgFavicon->getClientOriginalName());
            }

            if ($request->imgLogo01) {
                File::delete('public/upload/imgLogo/'.$preImg['cnttInfoLogo01']);
                $file = Image::make($request->file('imgLogo01')->getRealPath());

                $file->save('public/upload/imgLogo/'.$dt.'-'.$request->imgLogo01->getClientOriginalName());
            }

            if ($request->imgLogo02) {
                File::delete('public/upload/imgLogo/'.$preImg['cnttInfoLogo02']);
                $file = Image::make($request->file('imgLogo02')->getRealPath());

                $file->save('public/upload/imgLogo/'.$dt.'-'.$request->imgLogo02->getClientOriginalName());
            }
            
            if ($request->imgCover) {
                File::delete('public/upload/imgCover/'.$preImg['cnttInfoCoverImage']);
                $file = Image::make($request->file('imgCover')->getRealPath());

                $file->save('public/upload/imgCover/'.$dt.'-'.$request->imgCover->getClientOriginalName());
            }
        }

        return redirect()->route('admin.info.edit',['id' => 1])->with('success', 'Cập nhật thông tin thành công');
    }
}
