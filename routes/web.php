<?php

use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('home.index');


Route::get('/about', function () {
    return view('about');
})->name('about.index');




Route::get('/contact_us', function () {
    return view('Contact_us');
})->name('contact.index');


Route::group(['prefix' => 'contact-us'] , function(){


    Route::get('/' , [ContactUsController::class , 'index'])->name('contact.index');
    Route::post('/' , [ContactUsController::class , 'store'])->name('contact.store');

});