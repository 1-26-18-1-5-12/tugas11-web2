<?php
//manggil Controlller
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//bikin routing ke halaman dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

//Bikin routing ke halaman produk
Route::get('/produk', [ProdukController::class, 'index']);

//Bikin routing ke halaman from tambah data
Route::get('/produk/create', [ProdukController::class, 'create']);

//Bikin routing ke  fungsi store
Route::post('/produk/store', [ProdukController::class, 'store']);

//Bikin Routing untuk from edit
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);

//Bikin routing untuk validasi data update
Route::put('/produk/update/{id}', [ProdukController::class, 'update']);

//Bikin Routubg untuk delete data
Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);