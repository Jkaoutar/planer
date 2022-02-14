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
Route::get('ajouter', function () {

    return view('ajouter');
})->name('ajouter');
Route::get('details/{id?}', function () {

    return view('details');
})->name('details');
//route::get("get_societe", [SocieteController::class, 'get_societe'])->name('get_societe');
route::get("get_societe/{id?}", [SocieteController::class, 'get_societe'])->name('get_societe');
route::get("get_societe_id/{id?}", [SocieteController::class, 'get_societe_id'])->name('get_societe_id');
route::get("modification", [SocieteController::class, 'ListSociete'])->name('modification');
Route::post('addsociete',[SocieteController::class, 'addsociete'] )->name('addsociete');
Route::post('adddonnee',[SocieteController::class, 'adddonnee'] )->name('adddonnee');
Route::get('modificationGlobal/{id?}',[SocieteController::class, 'modificationGlobal'] )->name('modificationGlobal');
Route::post('ModificationGlobalPost',[SocieteController::class, 'ModificationGlobalPost'] )->name('ModificationGlobalPost');