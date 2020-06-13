<?php
use App\Mail\NewUserWelcomeEmail;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
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


Route::get('/', 'HomeController@index')->name('pages.index');
Route::get('pages/about', 'HomeController@about')->name('pages.about');
Route::get('pages/contact', 'HomeController@contact')->name('pages.contact');
Route::get('pages/rates', 'HomeController@rates')->name('pages.rates');
Route::get('pages/privacy', 'HomeController@privacy')->name('pages.privacy');
Route::post('contacts/sendmail', 'sendEmailController@mail')->name('send.mail');

Auth::routes();

