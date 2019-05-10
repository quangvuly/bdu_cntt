<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    protected $table = 'cnttcontact';
    protected $guarded = [];

    public function contactList() {
        $contactList = ContactModel::select('id','cnttContactBase','cnttContactAddress','cnttContactStatus')->get()->toArray();    
        return $contactList;
    }

    public function contactEdit($id) {
        $contactEdit = ContactModel::find($id)->toArray();
        return $contactEdit;
    }

    public function contactUpdate($request,$id) {
        $contactUpdate = ContactModel::find($id);
        $contactUpdate->cnttContactBase = $request->txtContactBase;
        $contactUpdate->cnttContactAddress = $request->txtContactAddress;
        $contactUpdate->cnttContactCity = $request->txtContactCity;
        $contactUpdate->cnttContactPhoneNo1 = $request->txtContactPhoneNo1;
        $contactUpdate->cnttContactPhoneNo2 = $request->txtContactPhoneNo2;
        $contactUpdate->cnttContactEmail = $request->txtContactEmail;
        $contactUpdate->cnttContactWebsite = $request->txtContactWebsite;
        $contactUpdate->cnttContactStatus = ($request->chkStatus) ? 1:2;
        $contactUpdate->save();
    }

    public function contactDelete($id) {
        return $contactDelete = ContactModel::find($id)->delete();
    }
}
