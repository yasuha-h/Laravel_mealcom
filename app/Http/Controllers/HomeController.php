<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        if( Auth::check() )
        {
          $user = Auth::user();
          return view('index', ['user' => $user]);
        }
        else
        {
          return view('index');
        }
    }
}
