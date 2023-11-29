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
    public function dashboard_ecommerce(){
        return view("admin.dashboard.dashboard_ecommerce");
    }
    public function dashboard_logistics(){
        return view("admin.dashboard.dashboard_logistics");
    }
    public function dashboard_academy(){
        return view("admin.dashboard.dashboard_academy");
    }
    public function calender(){
        return view("admin.calender.calender");
    }
    public function login(){
        return view("admin.login.login");
    }
    public function register(){
        return view("admin.login.register");
    }
}
