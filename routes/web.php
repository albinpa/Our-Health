<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\AdminMiddleware;

use App\Http\Controllers\DoctorController;

use App\Http\Controllers\BlogController;

use App\Http\Controllers\AppointmentController;


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
#------------------------------doctor routes--------------------------------------
Route::get('/doctor/create',[DoctorController::class, 'create'])->name('doctor.create')->middleware('auth','admin');

Route::get('/doctor',[DoctorController::class, 'index'])->name('doctor.index')->middleware('auth');

Route::post('/doctor',[DoctorController::class, 'store'])->name('doctor.store')->middleware('auth','admin');

Route::get('/doctor/{doctor}',[DoctorController::class, 'show'])->name('doctor.show')->middleware('auth');;

Route::get('/doctor/{doctor}/edit',[DoctorController::class, 'edit'])->name('doctor.edit')->middleware('auth','admin');

Route::patch('/doctor/{doctor}',[DoctorController::class, 'update'])->name('doctor.update')->middleware('auth','admin');

Route::delete('/doctor/{doctor}',[DoctorController::class, 'destroy'])->name('doctor.destroy')->middleware('auth','admin');
#------------------------------blog routes------------------------------------------
Route::get('/blog/create',[BlogController::class, 'create'])->name('blog.create')->middleware('auth','admin');

Route::get('/blog',[BlogController::class, 'index'])->name('blog.index')->middleware('auth');;

Route::post('/blog',[BlogController::class, 'store'])->name('blog.store')->middleware('auth','admin');

Route::get('/blog/{blog}',[BlogController::class, 'show'])->name('blog.show')->middleware('auth');;

Route::delete('/blog/{blog}',[BlogController::class, 'destroy'])->name('blog.destroy')->middleware('auth','admin');
#------------------------------Appointment routes--------------------------------------

Route::get('/appointment/create',[AppointmentController::class, 'create'])->name('appointment.create')->middleware('auth');;

Route::get('/appointment',[AppointmentController::class, 'index'])->name('appointment.index')->middleware('auth');

Route::post('/appointment',[AppointmentController::class, 'store'])->name('appointment.store')->middleware('auth');;

Route::get('/appointment/{appointment}',[AppointmentController::class, 'show'])->name('appointment.show')->middleware('auth');;


Route::get('/appointment/{appointment}/edit',[AppointmentController::class, 'edit'])->name('appointment.edit')->middleware('auth','admin');

Route::patch('/appointment/{appointment}',[AppointmentController::class, 'update'])->name('appointment.update')->middleware('auth','admin');


Route::delete('/appointment/{appointment}',[AppointmentController::class, 'destroy'])->name('appointment.destroy')->middleware('auth','admin');




