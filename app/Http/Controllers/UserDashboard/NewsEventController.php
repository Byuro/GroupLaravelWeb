<?php



namespace App\Http\Controllers\UserDashboard;

use App\Http\Controllers\Controller;

class NewsEventController extends Controller
{
    public function index()
    {
        
        return view('userdashboard.news');
    }
}