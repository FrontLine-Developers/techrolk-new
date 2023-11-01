<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/services#drone-solutions', function () {
    return view('Services#drone-solutions');
});

Route::get('/services#graphic-designing', function () {
    return view('Services#graphic-designing');
});

Route::get('/services#3d-cad', function () {
    return view('Services#3d-cad');
});

Route::get('/services#3d-printing', function () {
    return view('Services#3d-printing');
});

Route::get('/services-drone-solutions', function () {
    return view('drone_solutions');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cookies', function () {
    return view('cookies');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/shipping-details', function () {
    return view('shipping');
});

Route::get('/refund-policy', function () {
    return view('refund');
});
