<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'PagesController@index')->name('home');

Route::get('/home', 'PagesController@index')->name('home');

//Route::get('/test', 'PagesController@test');

Route::get('/apply', 'PagesController@start');

Route::get('/success', 'PagesController@finish')->name('successPage');

Route::post('applicant-submit', 'ApplicantController@getApplicant')->name('applicant.submit');

Route::get('/finish', 'PagesController@complete')->name('complete');

Route::get('/final', 'PagesController@final')->name('final');

Route::get('/cancelled', 'PagesController@cancel')->name('cancelled');

Route::get('logs-app', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

// Auth-Routes

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');

Route::get('/preschool', 'HomeController@pre')->name('preschool');

Route::get('/highschool', 'HomeController@high')->name('highschool');

Route::get('/primary', 'HomeController@pri')->name('primary');

// PDF-Download

Route::get('/downloadPDF/{id}', 'HomeController@downloadPDF')->name('downloadPDF');

Route::get('/admin/pdf', function () {
   return view('pdf1');
});

// Datatables-List
Route::get('pri', 'HomeController@pridatatable' )->name('pridata'); // for ajax serverside processing
Route::get('/primarylist', 'HomeController@primarylist'); // for the view_&_link

Route::get('high', 'HomeController@highdatatable')->name('highdata'); // for ajax processing
Route::get('/highschoolist', 'HomeController@highschoolist'); // for the view_&_link

Route::get('pre', 'HomeController@predatatable')->name('predata'); // for ajax processing
Route::get('/preschoolist', 'HomeController@preschoolist'); // for the view_&_link

// Branch Sort Via Datatables
Route::get('kempton', 'HomeController@kempton')->name('kempton'); // for ajax processing
Route::get('/kemptonpark', 'HomeController@kemptonpark'); // for view & link
//
Route::get('pretoria', 'HomeController@pretoria')->name('pretoria');
Route::get('/pretoriabranch', 'HomeController@pretoriabranch');
//
Route::get('randburg', 'HomeController@randburg')->name('randburg'); // for ajax processing
Route::get('/randburgbranch', 'HomeController@randburgbranch'); // view & link
//
Route::get('midrand', 'HomeController@midrand')->name('midrand');
Route::get('/midrandbranch', 'HomeController@midrandbranch');
//
Route::get('germiston', 'HomeController@germiston')->name('germiston');
Route::get('/germistonbranch', 'HomeController@germistonbranch');
//
Route::get('newhavard', 'HomeController@newhavard')->name('newhavard');
Route::get('/newhavardcollege', 'HomeController@newhavardcollege');
//
Route::get('roodepoort', 'HomeController@roodepoort')->name('roodepoort');
Route::get('/roodepoortbranch', 'HomeController@roodepoortbranch');
//
Route::get('hazyview', 'HomeController@hazyview')->name('hazyview');
Route::get('/hazyviewbranch', 'HomeController@hazyviewbranch');
//
Route::get('jhb', 'HomeController@jhb')->name('jhb');
Route::get('/jhbbranch', 'HomeController@jhbbranch');
//
Route::get('glendale', 'HomeController@glendale')->name('glendale');
Route::get('/glendalebranch', 'HomeController@glendalebranch');
//
Route::get('eastview', 'HomeController@eastview')->name('eastview');
Route::get('/eastviewbranch', 'HomeController@eastviewbranch');
// To Edit More ....

