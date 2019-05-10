<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\cntt_admin\User\CreateUserRequest;
use App\Http\Requests\cntt_admin\User\EditUserRequest;
use App\Model\UsersModel;
use DateTime;
use Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = new UsersModel;
        $listUser = $user->listUser();
        return view('cntt_admin/mod_user/list',['listUser' => $listUser]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $user_curr_level = Auth::user()->cnttUserLevel;
        // if ($user_curr_level == 0 || $user_curr_level == 1) {
        //     return view('cntt_admin/mod_user/add');
        // } else {
        //     return redirect()->route('admin.user.list')->with('error', 'Người dùng không được phép truy cập nội dung này');
        // }
        return view('cntt_admin/mod_user/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        $user = new UsersModel;
        $chkSuccess = $user->addUser($request);
        if ($chkSuccess == true) {
            $file = Image::make($request->file('imgUser')->getRealPath());
            $dt = date('Y-m-d-His');
            $file->resize(270,370);
            $file->save('public/upload/imgUserAvatar/'.$dt.'-'.$request->imgUser->getClientOriginalName());
        }
        return redirect()->route('admin.user.list')->with('success', 'Thêm người dùng thành công');
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
        $user = new UsersModel;
        $editUser = $user->editUser($id);
        $user_id = Auth::id();
        $user_permission = Auth::user()->cnttUserLevel;

        if ($user_id != 1 && ($id == 1 || ($editUser['cnttUserLevel'] == 1 && $user_id != $id) )) {
            return redirect()->route('admin.user.list')->with('error', 'Không thể cập nhật thông tin người dùng này');
        } else {
            return view('cntt_admin/mod_user/edit',['editUser' => $editUser]);
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditUserRequest $request, $id)
    {
        $preImg = UsersModel::find($id)->cnttUserImage;
        $user = new UsersModel;

        $chkSuccess = $user->updateUser($request,$id) ;
        $dt = date('Y-m-d-His');
        if (($request->imgUser) && $chkSuccess == true ) {

            File::delete('public/upload/imgUserAvatar/'.$preImg);
            $file = Image::make($request->file('imgUser')->getRealPath());
            
            $file->save('public/upload/imgUserAvatar/'.$dt.'-'.$request->imgUser->getClientOriginalName());
        }

        return redirect()->route('admin.user.list')->with('success', 'Cập nhật người dùng thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user_id = Auth::id();
        $user_permission = Auth::user()->cnttUserLevel;

        $user = new UsersModel;
        
        if ($id == 1 || ($user_id != 1 && $user_permission == 1 )) {
            return redirect()->route('admin.user.list')->with('error', 'Không thể xóa người dùng này');
        } else {
            $user->deleteUser($id);
            return redirect()->route('admin.user.list')->with('success', 'Người dùng đã bị xóa thành công');
        }
    }
}
