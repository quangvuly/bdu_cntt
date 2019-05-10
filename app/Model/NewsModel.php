<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use DateTime;

class NewsModel extends Model
{
    protected $table = 'cnttnews';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Model\UsersModel', 'cnttNewsUserID', 'id');
    }

    public function category()
    {
        return $this->belongsTo('App\Model\CategoryModel', 'cnttNewsCateID', 'id');
    }

    public function listNews() {
        $newsList = NewsModel::select('id', 'cnttNewsTitle', 'cnttNewsAuthor','cnttNewsDesc','cnttNewsCateID','cnttNewsUserID' , 'cnttNewsFeature','cnttNewsStatus','created_at')
                ->with(
                    [
                        'category' => function ($query) {
                            $query->select('id', 'cnttCateName');
                        },
                        'user' => function ($query) {
                            $query->select('id', 'cnttUserFirstName', 'cnttUserLastName','email');
                        }
                    ]
                )->orderBy('cnttNewsFeature','asc')->get()->toArray();
        return $newsList;
    }

    public function addNews($request) {
        $newsNew = new NewsModel;
        $newsNew->cnttNewsTitle = $request->txtTitle;
        $newsNew->cnttNewsCateID = $request->sltCate;
        $newsNew->cnttNewsDesc = $request->txtIntro;
        $newsNew->cnttNewsDetail = $request->txtContent;
        $newsNew->cnttNewsImage = date('Y-m-d-His').'-'.$request->imgNews->getClientOriginalName();
        $newsNew->cnttNewsUserID = $request->user()->id;
        $newsNew->cnttNewsStatus =($request->chkStatus) ? 1:2;
        $newsNew->cnttNewsFeature =($request->chkFeature) ? 1:2;
        $newsNew->created_at = new DateTime();
        $result = $newsNew->save();
        return $result;
    }

    public function editNews($id) {
        $editNews = NewsModel::with(
            [
                'user' => function ($query) {
                    $query->select('id', 'cnttUserFirstName', 'cnttUserLastName','email');
                }
            ])->find($id)->toArray();
        return $editNews;
    }


    public function updateNews($request,  $id) {
        $updateNews = NewsModel::find($id);

        if (!($request->imgNews)) {
            $img = $updateNews->cnttNewsImage;
        } else {
            $img = date('Y-m-d-His').'-'.$request->imgNews->getClientOriginalName();;
        } 
        
        $updateNews->cnttNewsTitle = $request->txtTitle;
        $updateNews->cnttNewsCateID = $request->sltCate;
        $updateNews->cnttNewsDesc = $request->txtIntro;
        $updateNews->cnttNewsDetail = $request->txtContent;
        $updateNews->cnttNewsImage = $img;
        $updateNews->cnttNewsUserID = $request->sltAuthor;
        $updateNews->cnttNewsStatus =($request->chkStatus) ? 1:2;
        $updateNews->cnttNewsFeature =($request->chkFeature) ? 1:2;
        $updateNews->updated_at = new DateTime();
        $result = $updateNews->save();
        return $result;
    }

    public function deleteNews($id) {
        return NewsModel::find($id)->delete();
    }

    //Extra function news

    public function findNews($id) {
        return NewsModel::find($id)->toArray();
    }

    // Get 4 lastest recent news
    public function listRCNewsSameCate($cateID) {
        $newsList = NewsModel::select('id','cnttNewsTitle','cnttNewsImage','cnttNewsCateID','cnttNewsFeature','created_at','updated_at')
        ->where(
                [
                    [
                        'cnttNewsStatus',1
                    ],
                    [
                        'cnttNewsCateID',$cateID
                    ]
                ]
            )->orderBy('created_at','desc')->take(4)->get()->toArray();

        return $newsList;
    }
}
