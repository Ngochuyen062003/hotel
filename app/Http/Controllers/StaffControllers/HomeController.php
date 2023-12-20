<?php

namespace App\Http\Controllers\StaffControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('staffs.index');
    }
    public function about(){
        return view('staffs.about');
    }
    public function services(){
        return view('staffs.services');
    }
    public function service_detail(){
        return view('staffs.service_detail');
    }
    public function blogs(){
        return view('staffs.blogs');
    }
    public function blog_detail(){
        return view('staffs.blog_detail');
    }
    public function rooms(){
        return view('staffs.rooms');
    }
    public function room_detail(){
        return view('staffs.room_detail');
    }
    public function contact(){
        return view('staffs.contact');
    }
    public function sign_in(){
        return view('staffs.sign_in');
    }
    public function sign_up(){
        return view('staffs.sign_up');
    }
    public function booking_done(){
        return view('staffs.booking_done');
    }
}
