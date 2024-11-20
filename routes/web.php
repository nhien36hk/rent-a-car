<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\CarDetailController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SearchController;

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
Route::middleware('admin')->group(function(){
    Route::get('/dashboard', function () {
        return view('admin/dashboard');
    })->name('admin.index');
});




Route::get('/logon', [AdminController::class, 'logon'])->name('logon');
Route::post('/logon', [AdminController::class, 'postLogon'])->name('admin.logon');
Route::get('/sign-out', [AdminController::class, 'sigOut'])->name('admin.signout');

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('index', function () {
    return view('index');
});

Route::get('about-us', function () {
    return view('about-us');
});

Route::get('contact', function () {
    return view('contact');
});
Route::post('search-carresult', [SearchController::class, 'searchcar']);
Route::get('seacrh-car', [SearchController::class, 'searchcar_name']);


Route::resource('car_details',CarDetailController::class);



// Route::get('upload-car', function () {
//     return view('uploadcar');
// });

// Route::get('car-listing', function () {
//     return view('car-listing');
// });


// Route::post('post-to-server',[FileController::class, 'index']);



Auth::routes();
 
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/upload-contact', [MessageController::class, 'postcontact'])->name('contact');
Route::get('upload-car',[CarDetailController::class,'create']);
Route::get('car-listing',[CarDetailController::class,'index']);
Route::get('cardetail/{car_details}',[CarDetailController::class,'show']);
Route::get('myposts/{car_details}',[CarDetailController::class,'userpost']);
Route::get('editcar/{CarDetail}',[CarDetailController::class,'edit']);
Route::get('deletecar/{car_details}',[CarDetailController::class,'destroy']);
Route::get('updatecar/{car_details}',[CarDetailController::class,'update']);
Route::get('withdriver',[CarDetailController::class,'withdriver']);
Route::get('withoutdriver',[CarDetailController::class,'withoutdriver']);
Route::get('allcars',[CarDetailController::class,'allcars']);
Route::get('update-contactinfo', [MessageController::class, 'message']);
Route::post('bookingcar', [CarDetailController::class, 'booking'])->name('booking');
Route::get('myorder', [CarDetailController::class,'showolder']);
Route::get('confirm_order/{id}', [CarDetailController::class,'confirm_oder']);
Route::get('delete_order/{id}', [CarDetailController::class,'delete_order']);
Route::get('order-detail/{id}', [CarDetailController::class,'order_detail']);

Route::get('reg-users', [RegController::class, 'userdata']); // Sửa 'usdata' thành tên phương thức


// Route::post('store-car-detail',[CarDetailController::class,'store']);




