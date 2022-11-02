<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Auth::routes();

Route::get('/',[App\Http\Controllers\HomeController::class,'home']);
Route::get('/home',[App\Http\Controllers\HomeController::class,'home']);
Route::get('/generatepdf', [App\Http\Controllers\PdfController::class, 'generatePDF'])->name('generatepdf');
Route::get('/result',[App\Http\Controllers\IndexController::class,'result'])->name('result');
Route::get('/helpdesk',[App\Http\Controllers\IndexController::class,'helpdesk'])->name('helpdesk');
Route::get('/faq',[App\Http\Controllers\IndexController::class,'faq'])->name('faq');
Route::post('/faq',[App\Http\Controllers\IndexController::class,'contactus'])->name('faq');
Route::get('/notices',[App\Http\Controllers\IndexController::class,'notices'])->name('notices');
Route::get('/subchoice',[App\Http\Controllers\IndexController::class,'subchoice'])->name('subchoice');
Route::get('/paymentmethod',[App\Http\Controllers\IndexController::class,'paymentmethod'])->name('paymentmethod');
Route::get('/allocatedsub',[App\Http\Controllers\IndexController::class,'allocatedsub'])->name('allocatedsub');
Route::get('/presult/{id}', [App\Http\Controllers\PresultController::class, 'presult'])->name('presult');
Route::get('/profile/{user}', [App\Http\Controllers\IndexController::class, 'index'])->name('profile.show');
Route::controller(AdminController::class)->group(function(){

    Route::get('adminlogin', 'index')->name('adminlogin');

    Route::get('adminregistration', 'registration')->name('adminregistration');

    Route::get('adminlogout', 'logout')->name('adminlogout');

    Route::post('validate_registration', 'validate_registration')->name('admin.validate_registration');

    Route::post('validate_login', 'validate_login')->name('admin.validate_login');

    Route::get('dashboard', 'dashboard')->name('dashboard');
    Route::post('addresult', 'addresult')->name('addresult');
    Route::post('addnotice', 'addnotice')->name('addnotice');
});



