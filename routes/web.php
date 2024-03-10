<?php

use App\Http\Controllers\Backsite\ConfigPaymentController;
use App\Http\Controllers\Backsite\ConsultationController;
use Illuminate\Support\Facades\Route;

// frontsite
use App\Http\Controllers\Frontsite\LandingController;
use App\Http\Controllers\Frontsite\PaymentController;
use App\Http\Controllers\Frontsite\AppointmentController;

// backsite
use App\Http\Controllers\Backsite\DashboardController;
use App\Http\Controllers\Backsite\HospitalPatientController;
use App\Http\Controllers\Backsite\PermissionController;
use App\Http\Controllers\Backsite\RoleController;
use App\Http\Controllers\Backsite\SpecialistController;
use App\Http\Controllers\Backsite\TransactionController;
use App\Http\Controllers\Backsite\TypeUserController;
use App\Http\Controllers\Backsite\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/', LandingController::class);

// route for frontsite
Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    // appointment page
    Route::resource('appointment', AppointmentController::class);

    // payment page
    Route::resource('payment', PaymentController::class);
});

// route for backsite
Route::group(['prefix' => 'backsite', 'as' => 'backsite.', 'middleware' => ['auth:sanctum', 'verified']], function () {

    // dashboard
    Route::resource('dashboard', DashboardController::class);

    // permission
    Route::resource('permission', PermissionController::class);

    // role
    Route::resource('role', RoleController::class);

    // type-user
    Route::resource('type_user', TypeUserController::class);

    // user
    Route::resource('user', UserController::class);

    // specialist
    Route::resource('specialist', SpecialistController::class);

    // consultation
    Route::resource('consultation', ConsultationController::class);

    // config payment
    Route::resource('config_payment', ConfigPaymentController::class);

    // hospital patient
    Route::resource('hospital_patient', HospitalPatientController::class);

    // appointment
    Route::resource('appointment', AppointmentController::class);

    // transaction
    Route::resource('transaction', TransactionController::class);
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function() {
//     return view('dashboard');
// })->name('dashboard');
