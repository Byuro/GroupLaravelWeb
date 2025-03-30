<?php

namespace App\Http\Controllers\UserDashboard\Programs;

use App\Http\Controllers\Controller;

class ShsController extends Controller
{
    public function index()
    {
        return view('userdashboard.programs.shs');
    }
}
