<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
      return view('home.userpage');
    }

    public function page(){
        return view('home.userpage');
    }



    public function redirect(){
    return  view('admin.home');

}}
