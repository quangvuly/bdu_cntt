<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DateTime;

class UsersModel extends Authenticatable
{
    protected $table = 'cnttuser';
    protected $guarded = [];

    public function news()
    {
        return $this->hasMany('App\Model\NewsModel', 'cnttNewsUserID', 'id');
    }

    // Function add new user 
    public function addUser($request) {
        $userNew = new UsersModel;
        $userNew->cnttUserFirstName = $request->txtFirstName;
        $userNew->cnttUserLastName = $request->txtLastName;
        $userNew->email = $request->txtEmail;
        $userNew->cnttUserPhone = $request->txtPhoneNumber;
        $userNew->password = bcrypt($request->txtPassword);
        $userNew->cnttUserLevel = ($request->checkPermission) ? 1:2;
        $userNew->cnttUserImage = date('Y-m-d-His').'-'.$request->imgUser->getClientOriginalName();
        $userNew->cnttUserStatus = ($request->chkStatus) ? 1:2;
        $userNew->created_at = new DateTime();
        $result = $userNew->save();;
        return $result;
    }

    public function listUser() {
        $userList = UsersModel::select('id','cnttUserFirstName','cnttUserLastName','email','cnttUserLevel','cnttUserStatus')->get()->toArray();
        return $userList;
    }

    public function editUser($id) {
        $userEdit = UsersModel::find($id)->toArray();
        return $userEdit;
    }

    public function updateUser($request, $id) {

        $userNew = UsersModel::find($id);

        if (!($request->txtPassword)) {
            $passNew = $userNew->password;
        } else {
            $passNew =  bcrypt($request->txtPassword);
        } 

        if (!($request->imgUser)) {
            $img = $userNew->cnttUserImage;
        } else {
            $img = date('Y-m-d-His').'-'.$request->imgUser->getClientOriginalName();;
        }

        $userNew->cnttUserFirstName = $request->txtFirstName;
        $userNew->cnttUserLastName = $request->txtLastName;
        $userNew->cnttUserPhone = $request->txtPhoneNumber;
        $userNew->password = $passNew;
        $userNew->cnttUserImage = $img;
        $userNew->cnttUserLevel = ($request->checkPermission) ? 1:2;
        $userNew->cnttUserStatus = ($request->chkStatus) ? 1:2;
        $userNew->created_at = new DateTime();
        $result = $userNew->save();
        return $result;
    }

    public function deleteUser($id) {
        return UsersModel::find($id)->delete();
    }
}   
