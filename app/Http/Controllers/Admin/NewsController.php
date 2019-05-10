<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\NewsModel;
use App\Model\CategoryModel;
use App\Model\UsersModel;
use Auth;
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

        $newUserListAll = UsersModel::where('cnttUserLevel','<>',0)->orderBy('cnttUserLevel','asc')->get()->toArray();
        $newUserListUser = UsersModel::where(
            [
                [
                    'cnttUserLevel','<>',0
                ],
                [
                    'cnttUserLevel','<>',1
                ]
            ])->orderBy('cnttUserFirstName','asc')->get()->toArray();

            $user_id_current = Auth::id();
            $user_permission_current = Auth::user()->cnttUserLevel;
    
            $user_id_news =  NewsModel::find($id)->cnttNewsUserID;
            $user_permission_news = NewsModel::find($id)->user->cnttUserLevel;
    
            if ($user_permission_current == 2 && ($user_id_current != $user_id_news)) {
                return redirect()->route('admin.news.list')->with('error', 'Không thể cập nhật bài viết của người dùng khác');
            } else {
                if ($user_permission_current == 1 && ($user_permission_news == 0 || (($user_id_current != $user_id_news) && $user_permission_news == 1))) {
                    return redirect()->route('admin.news.list')->with('error', 'Không thể cập nhật bài viết của người dùng khác');
                } else {
                    if (Auth::user()->cnttUserLevel == 0) {
                        return view('cntt_admin/mod_news/edit',['newsEdit' => $newsEdit,'newsCate'=>$newsCate, 'newsUserList' => $newUserListAll]);
                    } else {
                        return view('cntt_admin/mod_news/edit',['newsEdit' => $newsEdit,'newsCate'=>$newsCate, 'newsUserList' => $newUserListUser]);
                    }
                }
            }  
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

        $user_id_current = Auth::id();
        $user_permission_current = Auth::user()->cnttUserLevel;

        $user_id_news =  NewsModel::find($id)->cnttNewsUserID;
        $user_permission_news = NewsModel::find($id)->user->cnttUserLevel;

        if ($user_permission_current == 2 && ($user_id_current != $user_id_news)) {
            return redirect()->route('admin.news.list')->with('error', 'Không thể xóa bài viết của ngời dùng khác');
        } else {
            if ($user_permission_current == 1 && ($user_permission_news == 0 || (($user_id_current != $user_id_news) && $user_permission_news == 1))) {
                return redirect()->route('admin.news.list')->with('error', 'Không thể xóa bài viết của admin');
            } else {
                $news->deleteNews($id);
                return redirect()->route('admin.news.list')->with('success', 'Bài viết đã được xóa');
            }
        }
    }
}
