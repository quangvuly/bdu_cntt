<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\HomeModel;
use App\Model\InfoModel;

class HomeController extends Controller
{
    public function index() {

        $creModel = new HomeModel;

        //$allTotal = $creModel->getTotal();
        $FeatureNews = $creModel->homePageFeatureNews();
        $contact = $creModel->homePageContact();
        $slider = $creModel->homePageSlider();
        $lecturer = $creModel->homePageLecturer();
        $major = $creModel->homePageMajor();
        $cooperate = $creModel->homePageCooperate();
        $SVNews = $creModel->homePageSVNews();
        $SVRecentNews = $creModel->homePageSVRecentNews();
        $RecentNews = $creModel->homePageRecentNews();
        
        $infoMod = new InfoModel;
        $infoGet = $infoMod->infoGet(1);

        return view('cntt_client.page_home.index',[
                'FeatureNews' => $FeatureNews,
                'contact' => $contact,
                'slider' =>  $slider,
                'lecturer' =>  $lecturer,
                'major' =>  $major,
                'cooperate' =>  $cooperate,
                'SVNews' =>  $SVNews,
                'SVRecentNews' =>  $SVRecentNews,
                'RecentNews' =>  $RecentNews,
                'infoGet' => $infoGet,
            ]);
    }
}
