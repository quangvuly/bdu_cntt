<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DateTime;

class CooperateModel extends Model
{
    protected $table = 'cnttcooperate';
    protected $guarded = [];

    public function listCooperate() {
        $cooperateList = CooperateModel::get()->toArray();
        return $cooperateList;
    }

    public function addCooperate($request) {
        $cooperateNew = new CooperateModel;
        $cooperateNew->cnttCooperateName = $request->txtName;
        $cooperateNew->cnttCooperateDetail = $request->txtContent;
        $cooperateNew->cnttCooperateImage = date('Y-m-d-His').'-'.$request->imgCooperate->getClientOriginalName();
        $cooperateNew->cnttCooperateStatus = ($request->chkStatus) ? 1:2;
        $cooperateNew->cnttCooperateFeature =($request->chkFeature) ? 1:2;
        $cooperateNew->created_at = new DateTime();
        $result = $cooperateNew->save();
        return $result;
    }

    public function editCooperate($id) {
        $editCooperate = CooperateModel::find($id)->toArray();
        return $editCooperate;
    }

    public function updateCooperate($request,  $id) {
        $updateCooperate = CooperateModel::find($id);

        if (!($request->imgCooperate)) {
            $img = $updateCooperate->cnttCooperateImage;
        } else {
            $img = date('Y-m-d-His').'-'.$request->imgCooperate->getClientOriginalName();;
        } 
        
        $updateCooperate->cnttCooperateName = $request->txtName;
        $updateCooperate->cnttCooperateDetail = $request->txtContent;
        $updateCooperate->cnttCooperateImage = $img;
        $updateCooperate->cnttCooperateStatus = ($request->chkStatus) ? 1:2;
        $updateCooperate->cnttCooperateFeature =($request->chkFeature) ? 1:2;
        $updateCooperate->created_at = new DateTime();
        $result = $updateCooperate->save();
        return $result;
    }

    public function deleteCooperate($id) {
        CooperateModel::find($id)->delete();;
    }
}
