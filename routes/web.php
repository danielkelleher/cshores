<?php

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
    return view('index')->with('title','Home');
});
Route::get('/about', function () {
    return view('about')->with('title','About Us');
});
//Gallery Routes 
Route::get('/gallery','GalleryController@index');
Route::get('{property}/photos','GalleryController@property');
Route::get('{property}/rooms','RoomsController@property');
Route::get('{property}/guestbook','GuestbookController@property');


Route::get('book-now', function () {
    return redirect('https://hotels.cloudbeds.com/reservation/VpPS1v#checkin=2019-10-28&checkout=2019-10-29');
});
Route::get('book-now/caribbean-shores', function () {
    return redirect('https://hotels.cloudbeds.com/reservation/VpPS1v#checkin=2019-10-28&checkout=2019-10-29');
});
Route::get('book-now/landmark', function () {
    return redirect('https://hotels.cloudbeds.com/reservation/UI9XkQ');
});
Route::get('book-now/vacation-rentals', function () {
    return redirect('https://hotels.cloudbeds.com/reservation/W2eauH');
});
Route::get('book-now/inland-resort', function () {
    return redirect('https://hotels.cloudbeds.com/reservation/VpPS1v#checkin=2019-10-28&checkout=2019-10-29');
});

Route::get('happenings', function () {
    return view('happenings')->with('title','Local Events');
});

Route::get('happenings/post', function () {
    return view('blog-post')->with('title','Local Events');
});
Route::get('room/{room}', function () {
    return view('room')->with('title','Room Details');
});
Route::get('/guestbook', 'GuestbookController@index');


Route::get('/caribbean-shores/about', function () {
    return view('about-car')->with('title','About Caribbean Shores');
});
Route::get('/landmark/about', function () {
    return view('about-lan')->with('title','About Landmark Motel');
});
Route::get('/inland-resort/about', function () {
    return view('about-inland')->with('title','About Inland Resort');
});

Route::get('/contact-us', function () {
    return view('contact')->with('title','Contact Us');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
