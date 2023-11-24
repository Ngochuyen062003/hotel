<?php

namespace App\Http\Controllers\ClientControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('client.index');
    }
    public function about(){
        return view('client.about-us');
    }
    public function accommodation(){
        return view('client.accommodation');
    }
    public function gallery(){
        return view('client.gallery');
    }
    public function blogs(){
        return view('client.blogs');
    }
    public function contact(){
        return view('client.contact');
    }
    public function sign_in(){
        return view('client.sign-in');
    }
}
