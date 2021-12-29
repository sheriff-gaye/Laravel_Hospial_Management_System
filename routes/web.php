<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\AmbulanceController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BedControllclser;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\SpecialistController;
use App\Mail\mail as MailMail;
use Illuminate\Support\Facades\Mail;

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

//---------------------------after authenticating the user-------------------------------------
Auth::routes();
//------------------------------------end-auth---------------------------------------------------------

//--------------------------admin dashboard route---------------------------------------------
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//-----------------------------------end-------------------------------------------------------

//---------------------resource dashboard controller route----------------------------------------
Route::resource('admin/dashboard',DashboardController::class);
//---------------------------------end--------------------------------------------------------

//---------------------resource doctors controller route----------------------------------------
Route::resource('admin/doctors',DoctorsController::class);
//---------------------------------end--------------------------------------------------------

//---------------------resource department controller route----------------------------------------
Route::resource('department',DepartmentController::class);
//---------------------------------end-------------------------------------------------------------

//---------------------resource department controller route----------------------------------------
Route::resource('specialist',SpecialistController::class);
//---------------------------------end-------------------------------------------------------------

//---------------------resource marketing  controller route----------------------------------------
Route::resource('marketing',MarketingController::class);
//---------------------------------end-------------------------------------------------------------

//---------------------resource pharmacy controller route----------------------------------------
Route::resource('pharmacy',PharmacyController::class);
//---------------------------------end-------------------------------------------------------------

//---------------------resource patient controller route----------------------------------------
Route::resource('patient',PatientController::class);
//---------------------------------end-------------------------------------------------------------

//---------------------resource medicine controller route----------------------------------------
Route::resource('medicine',MedicineController::class);
//---------------------------------end-------------------------------------------------------------

//---------------------resource bed controller route----------------------------------------
Route::resource('bed',BedControllclser::class);
//---------------------------------end-------------------------------------------------------------

//---------------------resource ambulance controller route----------------------------------------
Route::resource('ambulance',AmbulanceController::class);
//---------------------------------end-------------------------------------------------------------


//---------------------resource appointment controller route----------------------------------------
Route::resource('appointment',AppointmentController::class);
//---------------------------------end-------------------------------------------------------------

Route::get('/mail', function(){
    return new mail;
});
