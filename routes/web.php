<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman awal (optional)
Route::get('/', function () {
    return redirect('/produk');
});

// CRUD Produk (Resource Controller)
Route::resource('produk', ProdukController::class);
