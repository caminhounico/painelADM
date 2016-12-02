<?php

namespace App\Http\Controllers;

use App\Repository\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function storeAvatar(Request $request)
    {
        $r = $this->userRepository()->addAvatar(Auth::user()->id, $request);


    }





    public function userRepository()
    {
        return $userRepository = new UserRepository();

    }
}
