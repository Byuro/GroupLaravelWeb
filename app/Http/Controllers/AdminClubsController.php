<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminClubsController extends Controller
{
    public function index()
    {
        return view('admin.clubs'); // Your actual view may vary
    }
}
