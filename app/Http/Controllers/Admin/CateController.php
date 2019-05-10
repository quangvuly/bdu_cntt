<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\cntt_admin\Cate\CreateCateRequest;
use App\Http\Requests\cntt_admin\Cate\UpdateCateRequest;
use App\Model\CategoryModel;

class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cate = new CategoryModel;
        $listCate = $cate->listCate();
        
        return view('cntt_admin/mod_category/list',['listCate' => $listCate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cntt_admin/mod_category/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCateRequest $request)
    {
        $cate = new CategoryModel;
        $cate->addCate($request);

        return redirect()->route('admin.cate.list')->with('success', 'Thêm danh mục thành công');
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
        $cate = new CategoryModel;
        $cateEdit = $cate->editCate($id);

        return view('cntt_admin\mod_category\edit',['cateEdit' => $cateEdit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCateRequest $request, $id)
    {
        $cate = new CategoryModel;
        $cate->updateCate($request, $id);

        return redirect()->route('admin.cate.list')->with('success', 'Cập nhật danh mục thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cate = new CategoryModel;
        $cate->deleteCate($id);
 
        return redirect()->route('admin.cate.list')->with('success', 'Danh mục đã bị xóa');
    }
}
