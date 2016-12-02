<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PanelController extends Controller
{
    public function home(){
        return view('admin.home');
    }

    public function profile(){
        return view('admin.profile');
    }
}
