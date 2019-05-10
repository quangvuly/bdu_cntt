<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\HomeModel;
use App\Model\SliderModel;
use App\Model\NewsClientModel;
use App\Model\CategoryModel;
use App\Model\MajorModel;

class NewsController extends Controller
{
    public function get_detailCate($id) {
       
        $news = new NewsClientModel;
        $listFTNewsSameCate = $news->listFTNewsSameCate($id);
        $listRCNewsSameCate = $news->listRCNewsSameCate($id);
        $cateName = CategoryModel::find($id)->toArray();
        $cateList = $news->cateList();

        return view('cntt_client.page_news.list',[
            'listFTNewsSameCate' => $listFTNewsSameCate,
            'listRCNewsSameCate' => $listRCNewsSameCate,
            'cateName' => $cateName,
            'cateList' => $cateList,
        ]);
    }

    public function get_detailNews($id) {

        $news = new NewsClientModel;
        $detailNews = $news->detailNews($id);
        $listRCNewsSameCate = $news->listRCNewsSameCate($detailNews['cnttNewsCateID']);
        $cateList = $news->cateList();
       
        return view('cntt_client.page_news.detail',[
            'detailNews' => $detailNews,
            'listRCNewsSameCate' => $listRCNewsSameCate,
            'cateList' => $cateList,
        ]);
    }

    public function get_detailSlider($id) {

        $slider = new SliderModel;
        $detailSlider = $slider->findSlider($id);
        $recentSlider = $slider->listSliderActive();

        return view('cntt_client.page_slider.detail',[
            'detailSlider' => $detailSlider,
            'recentSlider' => $recentSlider,

        ]);
    }

    public function get_detailMajor($id) {

        $major = new MajorModel;
        $detailMajor = $major->findMajor($id);
        $recentMajor = $major->listMajor();


        return view('cntt_client.page_major.detail',[
            'detailMajor' => $detailMajor,

            'recentMajor' => $recentMajor,
            // 'recentBlade01' => 'recent_major',

        ]);
    }

}
