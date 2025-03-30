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
use App\Http\Controllers\UserDashboard\Programs\ShsController; // Import ShsController here
use App\Http\Controllers\UserDashboard\CampusLife\StudentClubsController;
use App\Http\Controllers\UserDashboard\CampusLife\ActivitiesController;
use App\Http\Controllers\UserDashboard\FacultyandStaffController\FacultyStaffController;
use App\Http\Controllers\AdminDashboardController;  // Admin Dashboard Controller
use App\Http\Controllers\AdminFacultyController;  // Admin Faculty Controller
use App\Http\Controllers\AdminClubsController;  // Admin Clubs Controller
use App\Http\Controllers\AdminController; // AdminController added for Dashboard
use App\Http\Controllers\Admin\NewsController as AdminNewsController; // Admin News Controller
use App\Http\Controllers\MemberController; // Added the MemberController for handling members
use App\Http\Controllers\ClubController; // Added ClubController

// Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Login Routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

// Admin Routes wrapped in the auth middleware
Route::middleware('auth')->group(function () {
    // Admin Dashboard
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');  // Updated this route to use AdminController

    // Admin News Routes using resource route for CRUD operations
    Route::prefix('admin')->name('admin.')->group(function() {
        // News Routes
        Route::resource('news', AdminNewsController::class)->names([
            'index' => 'news.index',
            'create' => 'news.create',
            'store' => 'news.store',
            'show' => 'news.show',
            'edit' => 'news.edit',
            'update' => 'news.update',
            'destroy' => 'news.destroy',
        ]);
        
        // Members Routes using resource route for CRUD operations
        Route::resource('members', MemberController::class)->names([
            'index' => 'members.index',
            'create' => 'members.create',
            'store' => 'members.store',
            'show' => 'members.show',
            'edit' => 'members.edit',
            'update' => 'members.update',
            'destroy' => 'members.destroy',
        ]);

        // Explicitly add the 'edit' route for members here
        Route::get('members/{member}/edit', [MemberController::class, 'edit'])->name('members.edit');

        // Admin Clubs Routes - Display Clubs for Admin
        Route::get('/clubs', [AdminClubsController::class, 'index'])->name('admin.clubs');
    });

    // Logout Route
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// ABOUT DROPDOWN ROUTES (Public Routes)
Route::prefix('pages')->group(function () {
    Route::get('/storyatci', [StoryAtciController::class, 'index'])->name('storyatci');
    Route::get('/mission-vision', [MissionVisionController::class, 'index'])->name('missionvision');
    Route::get('/corevalues', [CoreValuesController::class, 'index'])->name('corevalues');
    Route::get('/aceshymn', [AcesHymnController::class, 'index'])->name('aceshymn');
});

// PROGRAMS & COURSES ROUTES (Public Routes)
Route::prefix('pages')->group(function () {
    Route::get('/bsba', [BsbaController::class, 'index'])->name('bsba');
    Route::get('/bsed', [BsedController::class, 'index'])->name('bsed');
    Route::get('/beed', [BeedController::class, 'index'])->name('beed');
    Route::get('/bshm', [BshmController::class, 'index'])->name('bshm');
    Route::get('/bsit', [BsitController::class, 'index'])->name('bsit');
    Route::get('/shs', [ShsController::class, 'index'])->name('shs'); // The route for SHS
});

// CAMPUS LIFE ROUTES (Public Routes)
Route::get('/clubs', [StudentClubsController::class, 'index'])->name('clubs');
Route::get('/activities', [ActivitiesController::class, 'index'])->name('activities');

// FACULTY AND STAFF ROUTE (Public Route)
Route::get('/facultystaff', [FacultyStaffController::class, 'index'])->name('facultystaff');

// Club Resource Route
Route::resource('clubs', ClubController::class);
