<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DateTime;

class CommunicateModel extends Model
{
    protected $table = 'cnttcomm';
    protected $guarded = [];

    public function listComm() {
        $commList = CommunicateModel::get()->toArray();
        return $commList;
    }

    public function addComm($request) {
        $commNew = new CommunicateModel;
        $commNew->cnttCommTitle = $request->txtCommTitle;
        $commNew->cnttCommIcon = $request->txtCommIcon;
        $commNew->cnttCommLink = $request->txtCommLink;
        $commNew->cnttCommStatus =($request->chkStatus) ? 1:2;
        $commNew->created_at = new DateTime();
        $commNew->save();
    }

    public function editComm($id) {
        $commEdit = CommunicateModel::find($id)->toArray();
        return $commEdit;
    }

    public function updateComm($request, $id) {

        $commUpdate = CommunicateModel::find($id);
        $commUpdate->cnttCommTitle = $request->txtCommTitle;
        $commUpdate->cnttCommIcon = $request->txtCommIcon;
        $commUpdate->cnttCommLink = $request->txtCommLink;
        $commUpdate->cnttCommStatus = ($request->chkStatus) ? 1:2;
        $commUpdate->updated_at = new DateTime();
        $commUpdate->save();
    }

    public function deleteComm($id) {
        return CommunicateModel::find($id)->delete();
    }

    public function findComm($id) {
        return CommunicateModel::find($id)->toArray();
    }


    
}
