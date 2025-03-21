<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Main
Route::view('/', 'welcome');


//user
Route::middleware(['auth', 'role:user', 'verified'])->group(function () {
    Route::view('/about', 'home.aboutUs')->name('about');
    Route::view('/contact', 'home.contactus')->name('contact');
    Route::view('/ourteam', 'home.ourteam')->name('ourteam');
    Route::view('/ourtrip', 'home.ourtrip')->name('ourtrip');
});



// Dash

//Admin
Route::middleware(['auth', 'role:admin', 'verified'])->group(function () {
    Route::view('/dashboard', 'layout.mainBody')->name('dashboard');
    Route::view('/charts', 'layout.charts')->name('charts');
    Route::view('/contacts', 'layout.indexcontact')->name('contacts');
    Route::view('/users', 'layout.users.index')->name('users');

    // Pro
    // Route::controller(ProfileController::class)->group(function () {
    //     Route::get('/profile', 'edit')->name('profile.edit');
    //     Route::patch('/profile', 'update')->name('profile.update');
    //     Route::delete('/profile', 'destroy')->name('profile.destroy');
    // });

    //user site
    Route::view('/about', 'home.aboutUs')->name('about');
    Route::view('/contact', 'home.contactus')->name('contact');
    Route::view('/ourteam', 'home.ourteam')->name('ourteam');
    Route::view('/ourtrip', 'home.ourtrip')->name('ourtrip');
});


// Super Admin
Route::middleware(['auth', 'role:super_admin', 'verified'])->group(function () {

    Route::view('/users', 'layout.users.index')->name('users');
});

require __DIR__ . '/auth.php';
