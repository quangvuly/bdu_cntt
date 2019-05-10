<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HomeModel extends Model
{
    public function homePageSlider(){
        $slider = SliderModel::select('id','cnttSliderTitle','cnttSliderIntro','cnttSliderDetail','cnttSliderImage','cnttSliderStatus')
            ->where('cnttSliderStatus',1)->get()->toArray();
        return $slider;
    }


    public function homePageFeatureNews() {
        $newsFeature = NewsModel::select('id','cnttNewsTitle','cnttNewsDesc','cnttNewsImage','cnttNewsFeature','cnttNewsStatus')
            ->where(
                [
                    [
                        'cnttNewsStatus',1
                    ],  
                    [
                        'cnttNewsFeature',1
                    ]
                ]
            )->take(6)->get()->toArray();
        return $newsFeature;
    }

    public function homePageContact() {
        $contact = ContactModel::get()->toArray();
        return $contact;
    }

    public function homePageLecturer() {
        $lecturer = LecturerModel::select('id','cnttLecturerFullName','cnttLecturerPosition','cnttLecturerImage','cnttLecturerStatus')
        ->where('cnttLecturerStatus',1)->take(12)->get()->toArray();
        return $lecturer;
    }

    public function homePageMajor() {
        $major = MajorModel::select('id','cnttMajorTitle','cnttMajorImage','cnttMajorStatus')
        ->where('cnttMajorStatus',1)->get()->toArray();
        return $major;
    }

    public function homePageCooperate() {
        $major = CooperateModel::select('id','cnttCooperateName','cnttCooperateImage','cnttCooperateFeature','cnttCooperateStatus')
        ->where('cnttCooperateStatus',1)->orderby('cnttCooperateFeature','asc')->get()->toArray();
        return $major;
    }

    public function homePageSVNews() {
        $newsSV = NewsModel::select('id','cnttNewsTitle','cnttNewsDesc','cnttNewsImage','cnttNewsCateID','cnttNewsFeature','cnttNewsStatus')
        ->where(
                [
                    [
                        'cnttNewsStatus',1
                    ],
                    [
                        'cnttNewsCateID',8
                    ]
                ]
            )->orderBy('cnttNewsFeature','asc')->take(4)->get()->toArray();
        return $newsSV;
    }

    public function homePageSVRecentNews() {
        $newsSVRecent = NewsModel::select('id','cnttNewsTitle','cnttNewsDesc','cnttNewsImage','cnttNewsCateID','cnttNewsFeature','cnttNewsStatus','created_at','updated_at')
        ->where(
                [
                    [
                        'cnttNewsStatus',1
                    ],
                    [
                        'cnttNewsCateID',8
                    ]
                ]
            )->orderBy('created_at','desc')->take(4)->get()->toArray();
        return $newsSVRecent;
    }

    public function homePageRecentNews() {
        $newsRecent = CategoryModel::select('id','cnttCateName')
        ->with(
            [
                'newsRelate' => function ($query) {
                    $query->select('id', 'cnttNewsTitle','cnttNewsDesc','cnttNewsCateID','cnttNewsImage','cnttNewsStatus','created_at','updated_at');
                }
            ])->get()->toArray();
        
        return $newsRecent;
    }

}
