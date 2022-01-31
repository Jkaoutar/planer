<?php
use App\Http\Controllers\SocieteController;
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

    return view('welcome');
})->name('welcome');
Route::get('suivi', function () {

    return view('suivi');
})->name('suivi');
//route::get("get_societe", [SocieteController::class, 'get_societe'])->name('get_societe');
route::get("get_societe/{id?}", [SocieteController::class, 'get_societe'])->name('get_societe');
