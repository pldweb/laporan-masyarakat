<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\LocalHelper\Helper;

class AdminController extends Controller
{
    public function getIndex()
    {
        $params = [
            'sideBarMenu' => Helper::renderMenuSideBar(),
            'indicatorMenu' => Helper::renderIndicatorDashbard()
        ];
        return view('admin.dashboard.index', $params);
    }

}
