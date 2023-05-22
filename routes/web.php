<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SpdController;
use App\Models\Employee;
use App\Models\Cuti;
use App\Models\Spd;

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
	$jumlahpegawai = Employee::count();
	$jumlahcuti = Cuti::count();
	$jumlahspd = Spd::count();
	$jumlahpegawailk = Employee::where('jeniskelamin','Laki-laki')->count();
	$jumlahpegawaipr = Employee::where('jeniskelamin','Perempuan')->count();
	$jumlahcutidisetujui = Cuti::where('approved','1')->count();
	$jumlahcutitidakdisetujui = Cuti::where('approved',' ','0')->count();
	
    return view('welcome', compact('jumlahpegawai', 'jumlahpegawailk', 'jumlahpegawaipr', 
	'jumlahcuti', 'jumlahspd', 'jumlahcutidisetujui', 'jumlahcutitidakdisetujui'));
});

Route::get('/pegawai',[EmployeeController::class, 'index'])->name('pegawai')->middleware('auth');
Route::get('/tambahpegawai',[EmployeeController::class, 'tambahpegawai'])->name('tambahpegawai');
Route::post('/insertdata',[EmployeeController::class, 'insertdata'])->name('insertdata');
Route::get('/tampilkandata/{id}',[EmployeeController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[EmployeeController::class, 'updatedata'])->name('updatedata');
Route::post('/update', [EmployeeController::class, 'update'])->name('update');
Route::get('/delete/{id}',[EmployeeController::class, 'delete'])->name('delete');
Route::get('/authors',[EmployeeController::class, 'authors'])->name('authors');

Route::get('/cuti',[CutiController::class, 'index'])->name('cuti');
Route::get('/tambahcuti',[CutiController::class, 'tambahcuti'])->name('tambahcuti');
Route::post('/insertdatacuti',[CutiController::class, 'insertdatacuti'])->name('insertdatacuti');
Route::get('/tampilkandatacuti/{id}',[CutiController::class, 'tampilkandatacuti'])->name('tampilkandatacuti');
Route::post('/updatedatacuti/{id}',[CutiController::class, 'updatedatacuti'])->name('updatedatacuti');
Route::get('/deletecuti/{id}',[CutiController::class, 'deletecuti'])->name('deletecuti');
Route::post('/updatecuti', [CutiController::class, 'updatecuti'])->name('updatecuti');
Route::get('/wordExport/{id}',[CutiController::class, 'wordExport'])->name('wordExport');
Route::put('/approved/{id}', [CutiController::class, 'approved'])->name('approved')->middleware('auth');
Route::get('/getDetails/{id}', [CutiController::class, 'getDetails'])->name('getDetails');

Route::get('/spd',[SpdController::class, 'index'])->name('spd');
Route::get('/tambahspd',[SpdController::class, 'tambahspd'])->name('tambahspd');
Route::post('/insertdataspd',[SpdController::class, 'insertdataspd'])->name('insertdataspd');
Route::get('/tampilkandataspd/{id}',[SpdController::class, 'tampilkandataspd'])->name('tampilkandataspd');
Route::post('/updatedataspd/{id}',[SpdController::class, 'updatedataspd'])->name('updatedataspd');
Route::get('/deletespd/{id}',[SpdController::class, 'deletespd'])->name('deletespd');
Route::post('/updatespd', [SpdController::class, 'updatespd'])->name('updatespd');
Route::get('/wordExportspd/{id}',[SpdController::class, 'wordExportspd'])->name('wordExportspd');

Route::get('/exportpdf',[EmployeeController::class, 'exportpdf'])->name('exportpdf');
Route::get('/exportexcel',[EmployeeController::class, 'exportexcel'])->name('exportexcel');
Route::post('/importexcel',[EmployeeController::class, 'importexcel'])->name('importexcel');

Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::post('/registeruser',[LoginController::class, 'registeruser'])->name('registeruser');
Route::post('/loginproses',[LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');