<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DashboardModel;
use Auth;

class DashboardController extends Controller
{

    public function index(){

       

        $creModel = new DashboardModel;
        $allTotal = $creModel->getTotal();
        $recentNews = $creModel->recentNews();

        $user_data = Auth::user()->toArray();

        return view('cntt_admin/mod_dashboard/index',[
            'allTotal' => $allTotal,
            'recentNews' => $recentNews,
            'user_data' => $user_data,
        ]);
    }


}
