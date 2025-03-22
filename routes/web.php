<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Main
Route::view('/', 'welcome');
    //user site


//user
Route::middleware(['auth', 'role:user', 'verified'])->group(function () {
    Route::view('/home', 'welcome');
    Route::view('/about', 'home.aboutUs')->name('about');
    Route::view('/contact', 'home.contactus')->name('contact');
    Route::view('/ourteam', 'home.ourteam')->name('ourteam');
    Route::view('/ourtrip', 'home.ourtrip')->name('ourtrip');
});



// Dash

//Admin
Route::middleware(['auth', 'role:admin', 'verified'])->group(function () {
    Route::view('/dashboard', 'admin.layout.mainBody')->name('dashboard');
    Route::view('/charts', 'admin.layout.charts')->name('charts');
    Route::view('/contacts', 'admin.layout.indexcontact')->name('contacts');
    Route::view('/users', 'admin.layout.users.index')->name('users');

    // Pro
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });

    Route::view('/home', 'welcome');
    Route::view('/about', 'home.aboutUs')->name('about');
    Route::view('/contact', 'home.contactus')->name('contact');
    Route::view('/ourteam', 'home.ourteam')->name('ourteam');
    Route::view('/ourtrip', 'home.ourtrip')->name('ourtrip');
});


// Super Admin
Route::middleware(['auth', 'role:super_admin', 'verified'])->group(function () {
    // Route::view('/dashboard', 'layout.mainBody')->name('dashboard');
    // Route::view('/charts', 'layout.charts')->name('charts');
    // Route::view('/contacts', 'layout.indexcontact')->name('contacts');
    // Route::view('/users', 'layout.users.index')->name('users');


    // //user site
    // Route::view('/home', 'welcome');
    // Route::view('/about', 'home.aboutUs')->name('about');
    // Route::view('/contact', 'home.contactus')->name('contact');
    // Route::view('/ourteam', 'home.ourteam')->name('ourteam');
    // Route::view('/ourtrip', 'home.ourtrip')->name('ourtrip');
});

require __DIR__ . '/auth.php';


Route::resource('contacts',ContactsController::class);

Route::resource('users', UserController::class);