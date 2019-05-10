<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DateTime;

class CategoryModel extends Model
{
    protected $table = 'cnttcategory';
    protected $guarded = [];

    public function newsRelate()
    {
        return $this->hasMany('App\Model\NewsModel', 'cnttNewsCateID', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Model\UsersModel', 'cnttCateUserID', 'id');
    }

    public function addCate($request) {
        $cateAdd = new CategoryModel;
        $cateAdd->cnttCateName = ucwords($request->txtCateName);
        $cateAdd->cnttCateUserID = $request->user()->id;
        $cateAdd->cnttCateStatus = ($request->chkStatus) ? 1:2 ;
        $cateAdd->created_at = new DateTime();
        $cateAdd->save();
    }

    public function listCate() {
        $cateList = CategoryModel::select('id','cnttCateName','cnttCateUserID','cnttCateStatus')
                    ->with(['user' => function ($query) {
                            $query->select('id', 'cnttUserFirstName', 'cnttUserLastName','email');
                        }
                    ])->orderBy('id','desc')->get()->toArray();
        return $cateList;
    }

    public function editCate($id) {
        $cateEdit = CategoryModel::find($id)->toArray();
        return $cateEdit;
    }

    public function updateCate($request, $id) {

        $cateUpdate = CategoryModel::find($id);
        $cateUpdate->cnttCateName = ucwords($request->txtCateName);
        $cateUpdate->cnttCateUserID = $request->user()->id;
        $cateUpdate->cnttCateStatus = ($request->chkStatus) ? 1:2;
        $cateUpdate->updated_at = new DateTime();
        $cateUpdate->save();
    }

    public function deleteCate($id) {
        return CategoryModel::find($id)->delete();
    }

    // Extra function category
    public function findCate($id) {
        return CategoryModel::find($id)->toArray();
    }

}
