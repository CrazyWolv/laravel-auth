<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\Backoffice\ArtistController as BOArtistController;

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

Route::get('/', [HomeController::class, 'index']);

// formulaire pour proposer un artiste
Route::get('/form', [ArtistController::class, 'addArtist'])->name("addArtist");

// Traitement du formulaire de proposition d'un artiste
Route::post('/form-submit', [ArtistController::class, 'submitArtist'])->name("submitArtist");

// Page de confirmation d'enregistrement de l'artiste
Route::get('/form-confirm', [ArtistController::class, 'confirmArtist'])->name("confirmArtist");


/************* route pour le backoffice *************/
Route::get('/bakcoffice', function () {
    return redirect()->route('boArtist');
});
Route::get('/bakcoffice/artists/list', [BOArtistController::class, 'list'])->name("boArtist");
Route::get('/bakcoffice/artists/add', [BOArtistController::class, 'add'])->name("boArtistAdd");
Route::post('/bakcoffice/artists/add-submit', [BOArtistController::class, 'addSubmit'])->name("boArtistAddSubmit");
Route::get('/bakcoffice/artists/edit/{id}', [BOArtistController::class, 'edit'])->name("boArtistEdit");
Route::post('/bakcoffice/artists/edit-submit/{id}', [BOArtistController::class, 'editSubmit'])->name("boArtistEditSubmit");
Route::delete('/bakcoffice/artists/delete/{id}', [BOArtistController::class, 'delete'])->name("boArtistDelete");
