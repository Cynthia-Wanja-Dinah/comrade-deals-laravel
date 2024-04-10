<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_category(){
        return view('admin.category');
    }
}
