<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/role', function () {
    $response = Http::get('http://waaasil.com/care/api/role');
    dd($response['data'][0]);
});
Route::get('/space', function () {
    $response = Http::get('http://waaasil.com/care/api/specialization');
    dd($response->json());
});

// Manger
// Asist
// Dentist
// Pediatrician
Route::get('/comingSoon', function () {
    return view('comingSoon');
});

Route::get('/login', 'PatientLoginController@create')->name('login.create');
Route::post('/login', 'PatientLoginController@store')->name('login.store');
Route::get('/register', 'RegisterController@create')->name('register.create');
Route::post('/register', 'RegisterController@store')->name('register.store');
Route::post('/doctorlogin', 'DoctorLoginController@store')->name('doctorlogin.store');
Route::post('/doctor', 'DoctorController@store')->name('doctor.store');


Route::get('/otp', 'otpController@index')->name('otp');
Route::post('/otp', 'otpController@store')->name('otp.store');

Route::get('/imageprofile', 'ImagesProfile@create')->name('imageprofile.create');
Route::post('/imageprofile', 'ImagesProfile@store')->name('imageprofile.store');

Route::get('/about', 'AboutController@index')->name('about');
Route::get('/pricing', 'PricingController@index')->name('pricing');

Route::get('/product', 'ProductController@index')->name('product');

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
// RouteGroup()

Route::get('/profile', 'PatientProfileController@create')->name('profile.create');

Route::post('/profile', 'PatientProfileController@store')->name('profile.store');

Route::get('/doctorProfile', 'DoctorProfileController@create')->name('doctorProfile.create');

Route::post('/doctorprofile', 'DoctorProfileController@store')->name('doctorProfile.store');

Route::resource('categories', 'CategoryController');

Route::resource('services', 'servicesController');

Route::resource('abouts', 'aboutController');
