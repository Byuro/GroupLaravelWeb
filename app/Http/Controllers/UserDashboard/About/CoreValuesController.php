<?php

// app/Http/Controllers/UserDashboard/About/StoryAtciController.php

namespace App\Http\Controllers\UserDashboard\About;

use App\Http\Controllers\Controller;

class CoreValuesController extends Controller
{
    public function index()
    {
        return view('userdashboard.about.corevalues');
    }
}
