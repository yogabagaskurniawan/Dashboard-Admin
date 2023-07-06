<?php

use Illuminate\Support\Facades\Auth;
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
    $portfolio = App\Portfolio::all();
    $testimonial = App\Testimonial::all();
    return view('welcome', compact('portfolio','testimonial'));
});

Auth::routes([
    'register' => false,
]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::post('/update-homepage', 'HomeController@updatecontent')->middleware('auth');

Route::get('/portfolios', 'PortfolioController@portfolio')->middleware('auth');
Route::post('/add-portfolio', 'PortfolioController@addPortfolio')->middleware('auth');
Route::get('/delete-portfolio/{id}', 'PortfolioController@deletePortfolio')->middleware('auth');

Route::get('/portfolio/detail/{id}', 'PortfolioController@detailPortfolio');

Route::get('/testimonials', 'TestimonialController@testimonial')->middleware('auth');
Route::post('/add-testimonial', 'TestimonialController@addTestimonial')->middleware('auth');
Route::get('/delete-testimonial/{id}', 'TestimonialController@deleteTestimonial')->middleware('auth');