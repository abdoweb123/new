<?php

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('Send_info','userController@getIndex');


// Route sing url
Route::get('/test1', function () {
    return "welcome";
});


// Route with parameters

// id is required
Route::get('/test2/{id}', function ($id) {
    return "$id";
})->name('egy');

// id is optional
Route::get('/test3/{id?}', function () {
    return "welcome";
})->name('eng');



    // لتنفيذ دالة موجودة داخل controller معين
Route::get('/home',[App\Http\Controllers\HomeController::class,'index'])->name('home.index');
Route::get('/user',[App\Http\Controllers\userController::class,'getIndex'])->name('user.getIndex');



// استخدام ال resource هيوفر علينا كتابة كود لكل method لوحدها لأننا هنكتب ال news في ال url وبعدها اسم ال method انظر الدرس رقم 19
Route::resource('news','NewsController');
/*
Route::get('news', 'NewsController@index');
Route::post('news', 'NewsController@store');
Route::delete('news/{id}', 'NewsController@delete');
*/


Route::get('app',function (){
    return view('test');
});


Route::get('offer','CrudController@getOffers');