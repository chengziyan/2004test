<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function reg(){
    	return view('index.register');
    }

    public function login(){
    	return view('index.login');
    }
}
