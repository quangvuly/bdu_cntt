<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\CommunicateModel;

class CommunicateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comm = new CommunicateModel;
        $listComm = $comm->listComm();
        
        return view('cntt_admin/mod_comm/list',['listComm' => $listComm]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cntt_admin/mod_comm/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comm = new CommunicateModel;
        $comm->addComm($request);

        return redirect()->route('admin.comm.list')->with('success', 'Thêm mục liên hệ thành công');
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
        $comm = new CommunicateModel;
        $commEdit = $comm->editComm($id);

        return view('cntt_admin\mod_comm\edit',['commEdit' => $commEdit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comm = new CommunicateModel;
        $comm->updateComm($request, $id);

        return redirect()->route('admin.comm.list')->with('success', 'Cập nhật mục liên hệ thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comm = new CommunicateModel;
        $comm->deleteComm($id);

        return redirect()->route('admin.comm.list')->with('success', 'Mục liên hệ đã bị xóa');
    }
}
