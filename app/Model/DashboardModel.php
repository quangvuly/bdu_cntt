<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DashboardModel extends Model
{
    public function getTotal() {
        $cateTotal = CategoryModel::count();
        $newsTotal = NewsModel::count();
        $userTotal = UsersModel::count();
        $feedbackTotal = 100;

        $allTotal = array([
            'cateTotal' => $cateTotal, 
            'newsTotal' => $newsTotal,
            'userTotal' => $userTotal,
            'feedbackTotal' => $feedbackTotal,
        ]);
        return $allTotal;
    }

    public function recentNews() {
        $newsRecent = NewsModel::where('cnttNewsStatus', 1)->orderBy('id', 'desc')->take(5)->get()->toArray();
        return $newsRecent;
    }

}
