<?php
  
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BookingAdminController;
  
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
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});

/*------------------------------------------
--------------------------------------------
All Booking Routes List
--------------------------------------------
--------------------------------------------*/
Route::get('/booking/create', [BookingController::class, 'create'])->name('booking.create');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
Route::get('/booking/waktu', [BookingController::class, 'getAvailableWaktuBooking'])->name('booking.waktu');
Route::get('/booking/input', [BookingController::class, 'create'])->name('booking.input');
Route::get('/booking/index', [BookingController::class, 'index']);
Route::get('/booking/terdaftar', [BookingController::class, 'terdaftar']);
Route::get('/booking/mybooking', [BookingController::class, 'mybooking'])->name('booking.search');

/*------------------------------------------
--------------------------------------------
All Booking Admin Routes List
--------------------------------------------
--------------------------------------------*/
// Dashboard-----------------------------------
Route::get('/admin/create', [BookingAdminController::class, 'create'])->name('admin.create');
Route::post('admin/booking', [BookingAdminController::class, 'store'])->name('bookingAdmin.store');
Route::get('/admin/index', [BookingAdminController::class, 'index'])->name('admin.index');
Route::get('/admin/updatestatus/{id}/{status}', [BookingAdminController::class, 'updatestatus']);
Route::get('/admin/updatestatuslist', [BookingAdminController::class, 'updatestatuslist'])->name('admin.acc');
Route::put('admin/edit_booking/{id}', [BookingAdminController::class, 'update'])->name('adminedit');
Route::get('/admin/show_prestasi/{id}', [BookingAdminController::class, 'show']);
Route::delete('/admin/hapus_booking/{id}', [BookingAdminController::class, 'destroy'])->name('adminhapus');


/*------------------------------------------
--------------------------------------------
All Customer Routes List
--------------------------------------------
--------------------------------------------*/
// Dashboard-----------------------------------
Route::get('/customer', function () {
    return view('customer.index');
});

// Login
Route::get('login', [LoginController::class, 'halamanlogin'])->name('login');
Route::post('postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

Route::get('register', function () {
    return view('login.register');
});