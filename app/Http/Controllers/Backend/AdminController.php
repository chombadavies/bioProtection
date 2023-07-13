<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class AdminController extends Controller
{
    public function admin (Request $request){

        Session::put("page","dashboard");
        return view('backend.dashboards.dashboard');    
    }
}
