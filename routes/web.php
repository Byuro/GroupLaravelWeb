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
use App\Http\Controllers\UserDashboard\CampusLife\StudentClubsController;
use App\Http\Controllers\UserDashboard\CampusLife\ActivitiesController;
use App\Http\Controllers\UserDashboard\FacultyandStaffController\FacultyStaffController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminFacultyController;
use App\Http\Controllers\AdminClubsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ClubController;

// Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// News Routes (Public)
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');

// Login Routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

// Admin Routes wrapped in the auth middleware
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::prefix('admin')->name('admin.')->group(function() {
        Route::resource('news', AdminNewsController::class)->names([
            'index' => 'news.index',
            'create' => 'news.create',
            'store' => 'news.store',
            'show' => 'news.show',
            'edit' => 'news.edit',
            'update' => 'news.update',
            'destroy' => 'news.destroy',
        ]);

        Route::resource('members', MemberController::class)->names([
            'index' => 'members.index',
            'create' => 'members.create',
            'store' => 'members.store',
            'show' => 'members.show',
            'edit' => 'members.edit',
            'update' => 'members.update',
            'destroy' => 'members.destroy',
        ]);

        Route::get('members/{member}/edit', [MemberController::class, 'edit'])->name('members.edit');

        Route::get('/clubs', [AdminClubsController::class, 'index'])->name('admin.clubs');
    });

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// About Dropdown Routes (Public)
Route::prefix('pages')->group(function () {
    Route::get('/storyatci', [StoryAtciController::class, 'index'])->name('storyatci');
    Route::get('/mission-vision', [MissionVisionController::class, 'index'])->name('missionvision');
    Route::get('/corevalues', [CoreValuesController::class, 'index'])->name('corevalues');
    Route::get('/aceshymn', [AcesHymnController::class, 'index'])->name('aceshymn');
});

// Programs & Courses Routes (Public)
Route::prefix('pages')->group(function () {
    Route::get('/bsba', [BsbaController::class, 'index'])->name('bsba');
    Route::get('/bsed', [BsedController::class, 'index'])->name('bsed');
    Route::get('/beed', [BeedController::class, 'index'])->name('beed');
    Route::get('/bshm', [BshmController::class, 'index'])->name('bshm');
    Route::get('/bsit', [BsitController::class, 'index'])->name('bsit');
    Route::get('/shs', [ShsController::class, 'index'])->name('shs');
});

// Campus Life Routes (Public)
Route::get('/clubs', [StudentClubsController::class, 'index'])->name('clubs');
Route::get('/activities', [ActivitiesController::class, 'index'])->name('activities');

// Faculty and Staff Route (Public)
Route::get('/facultystaff', [FacultyStaffController::class, 'index'])->name('facultystaff');

// Club Resource Route
Route::resource('clubs', ClubController::class);
