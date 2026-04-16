<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class IndexController extends Controller
{
  

    public function showRegister()
    {
        return view('Auth.registre.index');
    }
    
    public function showLogin()
    {
        return view('Auth.Login.index');
    }
}
