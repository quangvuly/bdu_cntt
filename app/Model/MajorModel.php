<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use DateTime;

class MajorModel extends Model
{
    protected $table = 'cnttmajor';
    protected $guarded = [];

    public function listMajor() {
        $majorList = MajorModel::get()->toArray();
        return $majorList;
    }

    // public function addMajor($request) {

    // }

    public function editMajor($id) {
        $editMajor = MajorModel::find($id)->toArray();
        return $editMajor;
    }


    public function updateMajor($request,  $id) {
        $updateMajor = MajorModel::find($id);

        if (!($request->imgMajor)) {
            $img = $updateMajor->cnttMajorImage;
        } else {
            $img = date('Y-m-d-His').'-'.$request->imgMajor->getClientOriginalName();;
        } 
        
        $updateMajor->cnttMajorTitle = $request->txtTitle;
        $updateMajor->cnttMajorContent = $request->txtContent;
        $updateMajor->cnttMajorImage = $img;
        $updateMajor->cnttMajorStatus =($request->chkStatus) ? 1:2;
        $updateMajor->updated_at = new DateTime();
        $result = $updateMajor->save();
        return $result;
    }

    // public function deleteMajor($id) {
       
    // }

    //Extra funtion
    public function findMajor($id) {
        $findMajor = MajorModel::find($id)->toArray();
        return $findMajor;
    }
}
