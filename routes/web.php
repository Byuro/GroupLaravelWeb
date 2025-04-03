<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
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
use App\Http\Controllers\UserDashboard\CampusLife\UserClubsController; 
use App\Http\Controllers\UserDashboard\CampusLife\ActivitiesController;
use App\Http\Controllers\UserDashboard\FacultyAndStaffController\FacultyStaffController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminFacultyController;
use App\Http\Controllers\AdminClubsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ClubController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    
    Route::prefix('admin')->name('admin.')->group(function() {
        
        Route::resource('news', AdminNewsController::class);
        Route::resource('members', MemberController::class);
        Route::get('members/{member}/edit', [MemberController::class, 'edit'])->name('members.edit');
        Route::resource('clubs', AdminClubsController::class)->names([
            'index' => 'admin.clubs.index',
            'create' => 'admin.clubs.create',
            'store' => 'admin.clubs.store',
            'edit' => 'admin.clubs.edit',
            'update' => 'admin.clubs.update',
            'destroy' => 'admin.clubs.destroy',
        ]);
    });

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::prefix('pages')->group(function () {
    // About Pages
    Route::get('/storyatci', [StoryAtciController::class, 'index'])->name('storyatci');
    Route::get('/mission-vision', [MissionVisionController::class, 'index'])->name('missionvision');
    Route::get('/corevalues', [CoreValuesController::class, 'index'])->name('corevalues');
    Route::get('/aceshymn', [AcesHymnController::class, 'index'])->name('aceshymn');

    
    Route::get('/bsba', [BsbaController::class, 'index'])->name('bsba');
    Route::get('/bsed', [BsedController::class, 'index'])->name('bsed');
    Route::get('/beed', [BeedController::class, 'index'])->name('beed');
    Route::get('/bshm', [BshmController::class, 'index'])->name('bshm');
    Route::get('/bsit', [BsitController::class, 'index'])->name('bsit');
    Route::get('/shs', [ShsController::class, 'index'])->name('shs');
});


Route::get('/userclubs', [UserClubsController::class, 'index'])->name('userclubs.index'); // Corrected route
Route::get('/activities', [ActivitiesController::class, 'index'])->name('activities');


Route::get('/facultystaff', [FacultyStaffController::class, 'index'])->name('facultystaff');


Route::resource('clubs', ClubController::class);
