<?php
use App\Http\Controllers\ItemController;
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

Route::get('/', [ItemController::class, 'home'])->name('home');
Route::get('/detail/{item}', [ItemController::class, 'detail'])->name('detail');
Route::get('/category/{category}', [ItemController::class, 'category'])->name('category');
Route::get('/brand', [ItemController::class, 'top5_brand'])->name('top5_brand');
Route::get('/brand/{brand}', [ItemController::class, 'brand'])->name('brand');
Route::get('/about', function () {
    return view('about');
});
