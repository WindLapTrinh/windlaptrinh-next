<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    //
    function __construct()
    {
        $this->middleware(function($request, $next){
            session(['model_active' => 'dashboard']);

            return $next($request);
        });
    }
    function show(){
        return view("admin.dashboard");
    }
}
