<?php

namespace App\Http\Controllers\StaffController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){
        return view('staffs.booking');
    }
}
