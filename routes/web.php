<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HalamanAboutController;
use App\Http\Controllers\HalamanMenuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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



Route::get('/dashboard', [DashboardController::class, 'index'])->name('index')->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Product
    // mendaftarkan fungsi index dari ProductController pada route /artikel
    Route::get('/produk', [ProductController::class, 'index'])->name('produk.index');

    // route untuk menampilkan view create produk
    Route::get('/produk/create', [ProductController::class, 'create'])->name('createProduk');

    // route untuk menyimpan produk, perhatikan bahwa fungsi routenya adalah post
    Route::post('/produk/create', [ProductController::class, 'store'])->name('storeProduk');

    // route untuk menampilkan view edit produk
    Route::get('/produk/{id}/edit', [ProductController::class, 'edit'])->name('editProduk');

    // route untuk menyimpan perubahan produk, perhatikan bahwa fungsi routenya adalah post
    Route::post('/produk/{id}/edit', [ProductController::class, 'update'])->name('updateProduk');

    // route untuk menghapus produk
    Route::get('/produk/{id}/delete', [ProductController::class, 'destroy'])->name('deleteProduk');

    //Kategori
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
    // route untuk menampilkan view create kategori
    Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
    // route untuk menyimpan kategori, perhatikan bahwa fungsi route nya adalah post
    Route::post('/kategori/create', [KategoriController::class, 'store'])->name('storeKategori');
    // route untuk menampilkan view edit kategori
    Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('editKategori');
    // route untuk menyimpan perubahan kategori, perhatikan bahwa fungsi routenya adalah post
    Route::post('/kategori/{id}/edit', [KategoriController::class, 'update'])->name('updateKategori');
    // route untuk menghapus kategori
    Route::get('/kategori/{id}/delete', [KategoriController::class, 'destroy'])->name('deleteKategori');

    //About
    Route::get('/about', [AboutController::class, 'index'])->name('about.index');
    // route untuk menampilkan view create about
    Route::get('/about/create', [AboutController::class, 'create'])->name('about.create');
    // route untuk menyimpan about, perhatikan bahwa fungsi route nya adalah post
    Route::post('/about/create', [AboutController::class, 'store'])->name('storeAbout');
    // route untuk menampilkan view edit about
    Route::get('/about/{id}/edit', [AboutController::class, 'edit'])->name('editAbout');
    // route untuk menyimpan perubahan about, perhatikan bahwa fungsi routenya adalah post
    Route::post('/about/{id}/edit', [AboutController::class, 'update'])->name('updateAbout');
    // route untuk menghapus about
    Route::get('/about/{id}/delete', [AboutController::class, 'destroy'])->name('deleteAbout');
});


//Halaman User
Route::get('/', [HomeController::class, 'index'])->name('user');

//Menu
Route::get('/halamanmenu', [HalamanMenuController::class, 'index'])->name('menu');


//About
Route::get('/halamanabout', [HalamanAboutController::class, 'index'])->name('about');




require __DIR__ . '/auth.php';
