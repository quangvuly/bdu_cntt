<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\NewsModel;
use App\Model\CategoryModel;
use App\Http\Requests\cntt_admin\News\CreateNewsRequest;
use App\Http\Requests\cntt_admin\News\UpdateNewsRequest;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $news = new NewsModel;
        $newsList = $news->listNews();
        return view('cntt_admin/mod_news/list',['newsList' => $newsList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = \Auth::user()->toArray();
        $news =  New CategoryModel;
        $newsCate = $news->listCate();
        return view('cntt_admin/mod_news/add',['newsCate' => $newsCate, 'newsUser' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNewsRequest $request)
     {   
        $NewAdd = new NewsModel;
        $chkSuccess = $NewAdd->addNews($request);
        if ($chkSuccess == true) {
            $file = Image::make($request->file('imgNews')->getRealPath());
            $dt = date('Y-m-d-His');
            // $file->resize(150,150);
            $file->save('public/upload/imgNewsFeature/'.$dt.'-'.$request->imgNews->getClientOriginalName());
        }
        return redirect()->route('admin.news.list')->with('success', 'Thêm bài viết thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = New CategoryModel;
        $newsCate = $news->listCate();
        $news = new NewsModel;
        $newsEdit = $news->editNews($id) ;

        return view('cntt_admin/mod_news/edit',['newsEdit' => $newsEdit,'newsCate'=>$newsCate]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsRequest $request, $id)
    {
        $preImg = NewsModel::find($id)->cnttNewsImage;
        $news = new NewsModel;
        
        $chkSuccess = $news->updateNews($request,$id) ;
        $dt = date('Y-m-d-His');
        if (($request->imgNews) && $chkSuccess == true ) {

            File::delete('public/upload/imgNewsFeature/'.$preImg);
            $file = Image::make($request->file('imgNews')->getRealPath());
            
            $file->save('public/upload/imgNewsFeature/'.$dt.'-'.$request->imgNews->getClientOriginalName());
        }

        return redirect()->route('admin.news.list')->with('success', 'Cập nhật bài viết thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $news = new NewsModel;
        $news->deleteNews($id);



        return redirect()->route('admin.news.list')->with('success', 'Bài viết đã được xóa');
    }
}
