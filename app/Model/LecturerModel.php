<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DateTime;

class LecturerModel extends Model
{
    protected $table = 'cnttlecturer';
    protected $guarded = [];

    public function listLecturer() {
        $lecturerList = LecturerModel::get()->toArray();
        return $lecturerList;
    }

    public function addLecturer($request) {
        $lecturerNew = new LecturerModel;
        $lecturerNew->cnttLecturerFullName = $request->txtFullName;
        $lecturerNew->cnttLecturerPosition = $request->txtPosition;
        $lecturerNew->cnttLecturerDetail = $request->txtContent;
        $lecturerNew->cnttLecturerImage = date('Y-m-d-His').'-'.$request->imgLecturer->getClientOriginalName();
        $lecturerNew->cnttLecturerStatus = ($request->chkStatus) ? 1:2;
        $lecturerNew->created_at = new DateTime();
        $result = $lecturerNew->save();
        return $result;
    }

    public function editLecturer($id) {
        $editLecturer = LecturerModel::find($id)->toArray();
        return $editLecturer;
    }

    public function updateLecturer($request,  $id) {
        $updateLecturer = LecturerModel::find($id);

        if (!($request->imgLecturer)) {
            $img = $updateLecturer->cnttLecturerImage;
        } else {
            $img = date('Y-m-d-His').'-'.$request->imgLecturer->getClientOriginalName();;
        } 
        
        $updateLecturer->cnttLecturerFullName = $request->txtFullName;
        $updateLecturer->cnttLecturerPosition = $request->txtPosition;
        $updateLecturer->cnttLecturerDetail = $request->txtContent;
        $updateLecturer->cnttLecturerImage = $img;
        $updateLecturer->cnttLecturerStatus = ($request->chkStatus) ? 1:2;
        $updateLecturer->created_at = new DateTime();
        $result = $updateLecturer->save();
        return $result;
    }

    public function deleteLecturer($id) {
        LecturerModel::find($id)->delete();;
    }
}
