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

Route::get('/', function () {
    return view('welcome');
});
Route::get('test1', function () {
    return view('test1');
});



Route::get('/email', function () {
    return new NewUserWelcomeEmail();
});
Auth::routes();




Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', function () {return view('about');});
Route::get('/contact', function () {return view('contact');});
Route::get('/rates', function () {return view('rates');});

Route::get('users/customers', 'UserController@customers')->name('users.customers');




// Route::get('/', 'PostController@index')->name('home');
Route::get('users/create', 'UserController@create');
Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');
Route::resource('permissions', 'PermissionController');
Route::resource('posts', 'PostController');


Route::get('/create_role_permission',function(){
     $role = Role::create(['name' => 'Administer ']);
     $permission = Permission::create(['name' => 'Administer roles & permissions']);
   auth()->user()->assignRole('Administer');
   auth()->user()->givePermissionTo('Administer roles & permissions');
   });




     //Category Routes

  Route::get('/categories', 'Backend\CategoriesController@index')->name('categories.index');
  Route::get('/categories/create', 'Backend\CategoriesController@create')->name('categories.create');
  Route::get('/categories/{id}', 'Backend\CategoriesController@show')->name('categories.show');


  Route::post('/categories', 'Backend\CategoriesController@store')->name('categories.store');
  Route::get('/categories/edit/{id}', 'Backend\CategoriesController@edit')->name('categories.edit');
  Route::PATCH('/categories/{id}', 'Backend\CategoriesController@update')->name('categories.update');
  Route::delete('/categories/delete/{id}', 'Backend\CategoriesController@delete')->name('categories.destroy');



  // package Routes
  Route::group(['prefix' => '/packages'], function(){
    // Route::get('/', 'Backend\PackageController@index')->name('admin.packages');
    Route::get('/create', 'Backend\PackageController@create')->name('packages.create');
    Route::get('/packageList_foreign', 'Backend\PackageController@packageList_foreign')->name('packages.packageList_foreign');
    Route::post('/store', 'Backend\PackageController@store')->name('packages.store');
    Route::get('/arrivePackage', 'Backend\PackageController@arrivePackage')->name('packages.arrivePackage');
    Route::post('/arrivePackageStore', 'Backend\PackageController@arrivePackageStore')->name('packages.arrivePackageStore');
    Route::get('/edit/{id}', 'Backend\PackageController@edit')->name('packages.edit');


    Route::PATCH('/{id}', 'Backend\PackageController@update')->name('package.update');

    Route::get('/show/{id}', 'Backend\PackageController@show')->name('packages.show');
    Route::post('/delete/{id}', 'Backend\PackageController@delete')->name('packages.destroy');

    // Route::post('/store', 'Backend\PackageController@store')->name('admin.package.store');

    // Route::post('/package/edit/{id}', 'Backend\PackageController@update')->name('admin.package.update');
    // Route::post('/package/delete/{id}', 'Backend\PackageController@delete')->name('admin.package.delete');



//EMAIL

Route::post('contacts/sendmail', 'sendEmailController@mail')->name('send.mail');

  });
