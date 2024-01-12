<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware(['auth'])->group(function () {
    Route::get('/booking',function(){
        return view('booking');
    })->name('booking');

    Route::get('/edit_profile',function(){
        return view('edit');
    })->name('edit_profile');

    Route::post('/editinfo',[HomeController::class,'editinfo'])->name('editinfo');
    Route::post('/updatepwd',[HomeController::class,'updatePassword'])->name('updatePassword');
});


Route::get('', function () {
    return view('welcome');
})->name('home');

Route::get('/menu',function(){
    return view('menu');
})->name('menu');

Route::get('/about',function(){
    return view('about');
})->name('about');

Route::get('/service',function(){
    return view('service');
})->name('service');

Route::get('/contact',function(){
    return view('contact');
})->name('contact');



Route::post('/contact',[ContactController::class,'store']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('admin');

Route::fallback(function () {
    return view('notfound');
});

// Route::get('/dashbord',[])
