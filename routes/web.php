<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('items')->group(function () {
    Route::get('/', [App\Http\Controllers\ItemController::class, 'index']);
    Route::get('/add', [App\Http\Controllers\ItemController::class, 'add']);
    Route::post('/add', [App\Http\Controllers\ItemController::class, 'add']);
});
Route::delete('item/{id}', [\App\Http\Controllers\ItemController::class, 'destroy']);
Route::get('editing/{id}', [App\Http\Controllers\EditingController::class, 'edit']);
Route::put('item/{id}', [App\Http\Controllers\EditingController::class, 'update']);
Route::get('detail/{id}', [App\Http\Controllers\ItemController::class, 'detail']);
Route::get('earnings', [App\Http\Controllers\ItemController::class, 'earnings']);
Route::post('earnings', [App\Http\Controllers\EarningsController::class, 'earnings']);
