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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware("auth") // controllo che mostra contenuto solo ad utenti loggati
->namespace("Admin") // Aggiunge il prefisso sui controller, precisamente la cartella dove ci troviamo
->prefix("admin") // prefisso per URI
->name("admin.") // prefisso ai name
->group(function(){ // raggruppamento
    // Rotte per Admin
    Route::get("/", "HomeController@index")->name("home");
    Route::resource("posts", "PostController");
});
