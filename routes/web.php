<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
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

// Route::get('/', function () {
    
//     return view('welcome');
// });
// Route::get('/role', function () {
//     $response = Http::post('http://waaasil.com/care/api/patients/3', [
//         // 'userId' => $request->userId,
//         'name' => 'name',
//         'state_id' => 1,
//         'address' => 'name',
//          'height' => 6,
//         'image' => 'name',
//         'blood_group' => 'name',
//         'date_of_birth' =>2020-9-8,
//         'weight' => 9,
//         'date ' => 2020-9-8,
//      ]);

//      $data =json_decode($response->getBody(), true);
//      $saveData=$data;
//      dd( $saveData);
// });
// Route::get('/space', function () {
//     $response = Http::get('http://waaasil.com/care/api/specialization');
//     dd($response->json());
// });

// Manger
// Dentist
// Pediatrician
Route::get('/comingSoon', function () {
    return view('comingSoon');
});
Route::get('/new', function () {
    return view('new');
});
// for website page
Route::get('/', 'WelcomeController@index')->name('/');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/pricing', 'PricingController@index')->name('pricing');

// login page forpation and doctor 
Route::get('/loginCustom', 'PatientLoginController@create')->name('login.create');
Route::post('/loginCustom', 'PatientLoginController@store')->name('login.store');
// Route::post('/loginCustom', 'PatientLoginController@store')->name('login.store');

Route::post('/doctorlogin', 'DoctorLoginController@store')->name('doctorlogin.store');

// registratin page for pation and doctor
Route::get('/registerCustom', 'RegisterController@create')->name('register.create');
Route::post('/registerCustom', 'RegisterController@store')->name('register.store');
Route::post('/doctor', 'DoctorController@store')->name('doctor.store');



//Pation Profile
Route::get('/profile', 'PatientProfileController@create')->name('profile.create');
Route::get('/showProfile/{userId}', 'PatientProfileController@show')->name('profile.show');
Route::get('/profile/{userId}', 'PatientProfileController@edit')->name('profile.edit');
Route::post('/updateProfile/{userId}', 'PatientProfileController@update')->name('profile.update');

//dOCTOR PROFILE
Route::get('/doctorProfile', 'DoctorProfileController@create')->name('doctorProfile.create');
Route::get('/showDoctorProfile/{userId}', 'DoctorProfileController@show')->name('doctorProfile.show');
Route::get('/doctorProfile/{userId}', 'DoctorProfileController@edit')->name('doctorProfile.edit');
Route::post('/updateDoctorProfile/{userId}', 'DoctorProfileController@update')->name('doctorProfile.update');

Route::get('/otp', 'otpController@index')->name('otp');
Route::post('/otp', 'otpController@store')->name('otp.store');
Route::get('/otp', 'otpController@index')->name('otp');
Route::post('/otp', 'otpController@store')->name('otp.store');


// Route::get('/solution', 'SolutionController@index')->name('solution');


// RouteGroup()









// Auth::routes(['verify' => true]);

// Route::get('/home', 'HomeController@index')->middleware('verified');


Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product', 'ProductController@index')->name('product');
Route::get('/about', 'AboutController@index')->name('about');
Route::resource('brifDescriptions', 'BrifDescriptionController');

Route::resource('services', 'ServicesController');

Route::resource('reviwes', 'ReviwesController');

Route::resource('goals', 'GoalsController');

Route::resource('aboutuses', 'AboutUsController');

Route::resource('plansPicings', 'Plans_PicingController');

Route::resource('patentServices', 'Patent_ServicesController');