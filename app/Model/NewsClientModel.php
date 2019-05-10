<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class NewsClientModel extends Model
{
     protected $table = 'cnttnews';
     protected $guarded = [];
    
    // ------------------- News --------------------//
    // Get detail a news
    public function detailNews($id) {
        $model = new NewsModel;
        $detailNews = $model->findNews($id);
        return $detailNews;
    }

    //List recent news is same the category of the news
    public function listRCNewsSameCate($cateID) {

        $model = new NewsModel;
        $listRCNewsSameCate = $model->listRCNewsSameCate($cateID);

        return $listRCNewsSameCate;
    }
    // ----------------- End news ------------------//

    public function cateList() {
        $cate = CategoryModel::get()->toArray();
        
        return $cate;
    }

    public function listFTNewsSameCate($cateID) {
        $listFTNewsSameCate = NewsModel::select('id','cnttNewsTitle','cnttNewsImage','cnttNewsCateID','cnttNewsFeature','created_at','updated_at')
        ->where(
                [
                    [
                        'cnttNewsStatus',1
                    ],
                    [
                        'cnttNewsCateID',$cateID
                    ]
                ]
            )->orderBy('cnttNewsFeature','asc')->take(4)->get()->toArray();

        return $listFTNewsSameCate;
    }

    public function detailNewsCateList($id) {

        $detailNewsCate = NewsClientModel::select('id','cnttNewsTitle','cnttNewsImage','cnttNewsCateID','cnttNewsFeature','created_at','updated_at')
        ->where(
                [
                    [
                        'cnttNewsStatus',1
                    ],
                    [
                        'cnttNewsCateID',$id
                    ]
                ]
            )->orderBy('created_at','desc')->take(4)->get()->toArray();

        return $detailNewsCate;
    }
}
