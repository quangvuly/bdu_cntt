<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DateTime;

class InfoModel extends Model
{
    protected $table = 'cnttinfo';
    protected $guarded = [];

    public function infoGet($id) {
        $info = InfoModel::find($id)->toArray();
        return $info;
    }

    public function infoUpdate($request, $id) {
        $info = InfoModel::find($id);

        if (!($request->imgFavicon)) {
            $imgFavicon = $info->cnttInfoFavicon;
        } else {
            $imgFavicon = date('Y-m-d-His').'-'.$request->imgFavicon->getClientOriginalName();;
        } 

        if (!($request->imgLogo01)) {
            $imgLogo01 = $info->cnttInfoLogo01;
        } else {
            $imgLogo01 = date('Y-m-d-His').'-'.$request->imgLogo01->getClientOriginalName();;
        } 

        if (!($request->imgLogo02)) {
            $imgLogo02 = $info->cnttInfoLogo02;
        } else {
            $imgLogo02 = date('Y-m-d-His').'-'.$request->imgLogo02->getClientOriginalName();;
        } 

        if (!($request->imgCover)) {
            $imgCover = $info->cnttInfoCoverImage;
        } else {
            $imgCover = date('Y-m-d-His').'-'.$request->imgCover->getClientOriginalName();;
        } 
        
        $info->cnttInfoTitle = $request->txtTitle;
        $info->cnttInfoCopyright = $request->txtCopyright;
        $info->cnttInfoFavicon = $imgFavicon;
        $info->cnttInfoLogo01 = $imgLogo01;
        $info->cnttInfoLogo02 = $imgLogo02;
        $info->cnttInfoCoverImage = $imgCover;
        $info->updated_at = new DateTime();
        $result = $info->save();
        return $result;
    }
    
}
