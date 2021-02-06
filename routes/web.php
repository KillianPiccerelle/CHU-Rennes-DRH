<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormationController;
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

Route::get('/', function () {
    return view('auth.login');
});
Route::middleware('auth:sanctum')->group(function() {

    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::get('/formationsAvailables', [FormationController::class,'index'])->name('formationsAvailables');
    Route::get('/formationsAvailables/{id}/show', [FormationController::class,'show'])->name('formationsAvailables.show');
    Route::post('/formationsAvailables/store', [FormationController::class,'store'])->name('formationsAvailables.store');


    Route::get('/formationsValidate', [FormationController::class,'validateOneUser'])->name('formationsValidate');



});
