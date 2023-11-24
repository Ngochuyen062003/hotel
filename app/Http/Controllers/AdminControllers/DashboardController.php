<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard(){
        return view("admin.dashboard.dashboard");
    }
    public function dashboard_crm(){
        return view("admin.dashboard.dashboard_crm");
    }
    public function calender(){
        return view("admin.calender.calender");
    }
}
