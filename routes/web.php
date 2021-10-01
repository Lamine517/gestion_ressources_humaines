<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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
// Route::resource('/admin/employes','EmployeController');

Auth::routes();
// Route::get('/player', 'PlayerController@index')->name('player')->middleware('player');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/user', 'UserController@index')->name('user')->middleware('user');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// contrats
Route::get('/admin/contrats', [App\Http\Controllers\ContratController::class, 'index'])->name('admin.contrats');
// les employes
Route::get('/admin/employes', [App\Http\Controllers\EmployeController::class, 'index'])->name('admin.employes');
Route::get('/user/employes/create', [App\Http\Controllers\EmployeController::class, 'create'])->name('user.employes.create');
// conges
Route::get('/admin/conges', [App\Http\Controllers\CongeController::class, 'index'])->name('admin.conges');
// abscences
Route::get('/admin/abscences', [App\Http\Controllers\AbscenceController::class, 'index'])->name('admin.abscences');


// postes
Route::get('/admin/postes', [App\Http\Controllers\PosteController::class, 'index'])->name('admin.postes');
// users
Route::get('/users', [App\Http\Controllers\UserController::class, 'getUsers'])->name('users.index');

// users
// Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');

// cotisations
Route::get('/admin/cotisations', [App\Http\Controllers\CotisationController::class, 'index'])->name('admin.cotisations');

// formations
Route::get('/admin/formations', [App\Http\Controllers\FormationController::class, 'index'])->name('admin.formations');

// offreEmploies
Route::get('/admin/offreEmploies', [App\Http\Controllers\OffreEmploieController::class, 'index'])->name('admin.offreEmploies');
// mouvements
Route::get('/admin/mouvements', [App\Http\Controllers\MouvementController::class, 'index'])->name('admin.mouvements');

// mouvements
Route::get('/admin/categoriesEmployes', [App\Http\Controllers\CategorieEmployeController::class, 'index'])->name('admin.categoriesEmployes');



