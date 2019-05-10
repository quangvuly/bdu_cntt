<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DateTime;

class SliderModel extends Model
{
    protected $table = 'cnttslider';
    protected $guarded = [];

    public function listSlider() {
        $sliderList = SliderModel::get()->toArray();
        return $sliderList;
    }

    public function editSlider($id) {
        $sliderEdit = SliderModel::find($id)->toArray();
        return $sliderEdit;
    }

    public function updateSlider($request,  $id) {
        $updateSlider = SliderModel::find($id);

        if (!($request->imgSlider)) {
            $img = $updateSlider->cnttSliderImage;
        } else {
            $img = date('Y-m-d-His').'-'.$request->imgSlider->getClientOriginalName();;
        } 
        
        $updateSlider->cnttSliderTitle = $request->txtTitle;
        $updateSlider->cnttSliderIntro = $request->txtIntro;
        $updateSlider->cnttSliderDetail = $request->txtContent;
        $updateSlider->cnttSliderImage = $img;
        $updateSlider->cnttSliderStatus =($request->chkStatus) ? 1:2;
        $updateSlider->updated_at = new DateTime();
        $result = $updateSlider->save();
        return $result;
    }

    //Extra function
    public function findSlider($id) {
        $sliderFind = SliderModel::find($id)->toArray();
        return $sliderFind;
    }
    public function listSliderActive() {
        $sliderList = SliderModel::where('cnttSliderStatus','1')->get()->toArray();
        return $sliderList;
    }



}
