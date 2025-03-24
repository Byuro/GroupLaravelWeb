<?php

use App\Http\Controllers\UserDashboard\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// routes/web.php

use App\Http\Controllers\UserDashboard\About\StoryAtciController;

Route::get('/storyatci', [StoryAtciController::class, 'index'])->name('storyatci');


use App\Http\Controllers\UserDashboard\About\MissionVisionController;

// Define the route to the MissionVisionController
Route::get('/mission-vision', [MissionVisionController::class, 'index'])->name('missionvision');


use App\Http\Controllers\UserDashboard\About\CoreValuesController;

// Define the route to the MissionVisionController
Route::get('/corevalues', [CoreValuesController::class, 'index'])->name('corevalues');


use App\Http\Controllers\UserDashboard\About\AcesHymnController;

// Define the route to the MissionVisionController
Route::get('/aceshymn', [AcesHymnController::class, 'index'])->name('aceshymn');


use App\Http\Controllers\UserDashboard\Programs\BsbaController;

// Define the route to the MissionVisionController
Route::get('/bsba', [BsbaController::class, 'index'])->name('bsba');


use App\Http\Controllers\UserDashboard\Programs\BsedController;

// Define the route to the MissionVisionController
Route::get('/bsed', [BsedController::class, 'index'])->name('bsed');


use App\Http\Controllers\UserDashboard\Programs\BeedController;

// Define the route to the MissionVisionController
Route::get('/beed', [BeedController::class, 'index'])->name('beed');


use App\Http\Controllers\UserDashboard\Programs\BshmController;

// Define the route to the MissionVisionController
Route::get('/bshm', [BshmController::class, 'index'])->name('bshm');


use App\Http\Controllers\UserDashboard\Programs\BsitController;

// Define the route to the MissionVisionController
Route::get('/bsit', [BsitController::class, 'index'])->name('bsit');


use App\Http\Controllers\UserDashboard\Programs\ShsController;

// Define the route to the MissionVisionController
Route::get('/shs', [ShsController::class, 'index'])->name('shs');

use App\Http\Controllers\UserDashboard\CampusLife\StudentClubsController;

// Define the route to the MissionVisionController
Route::get('/clubs', [StudentClubsController::class, 'index'])->name('clubs');

use App\Http\Controllers\UserDashboard\CampusLife\ActivitiesController;

// Define the route to the MissionVisionController
Route::get('/activities', [ActivitiesController::class, 'index'])->name('activities');