<?php

use App\Http\Controllers\UserDashboard\HomeController;
use App\Http\Controllers\UserDashboard\About\StoryAtciController;
use App\Http\Controllers\UserDashboard\About\MissionVisionController;
use App\Http\Controllers\UserDashboard\About\CoreValuesController;
use App\Http\Controllers\UserDashboard\About\AcesHymnController;

use App\Http\Controllers\UserDashboard\Programs\BsbaController;
use App\Http\Controllers\UserDashboard\Programs\BsedController;
use App\Http\Controllers\UserDashboard\Programs\BeedController;
use App\Http\Controllers\UserDashboard\Programs\BshmController;
use App\Http\Controllers\UserDashboard\Programs\BsitController;
use App\Http\Controllers\UserDashboard\Programs\ShsController;

use App\Http\Controllers\UserDashboard\CampusLife\StudentClubsController;
use App\Http\Controllers\UserDashboard\CampusLife\ActivitiesController;

use App\Http\Controllers\UserDashboard\FacultyandStaffController\FacultyStaffController;



Route::get('/', [HomeController::class, 'index'])->name('home');

// routes/web.php





//ABOUT DROPDOWN

Route::prefix('pages')->group(function () {
    Route::get('/storyatci', [StoryAtciController::class, 'index'])->name('storyatci');
    Route::get('/mission-vision', [MissionVisionController::class, 'index'])->name('missionvision');
    Route::get('/corevalues', [CoreValuesController::class, 'index'])->name('corevalues');
    Route::get('/aceshymn', [AcesHymnController::class, 'index'])->name('aceshymn');
});



//PROGRAMS & COURSES


Route::prefix('pages')->group(function () {
    Route::get('/bsba', [BsbaController::class, 'index'])->name('bsba');
    Route::get('/bsed', [BsedController::class, 'index'])->name('bsed');
    Route::get('/beed', [BeedController::class, 'index'])->name('beed');
    Route::get('/bshm', [BshmController::class, 'index'])->name('bshm');
    Route::get('/bsit', [BsitController::class, 'index'])->name('bsit');
    Route::get('/shs', [ShsController::class, 'index'])->name('shs');

});

    Route::get('/clubs', [StudentClubsController::class, 'index'])->name('clubs');
    Route::get('/activities', [ActivitiesController::class, 'index'])->name('activities');

    Route::get('/facultystaff', [FacultyStaffController::class, 'index'])->name('facultystaff');


    















