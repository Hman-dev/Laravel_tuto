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
/*Route::get('/', function () {
    echo "Brouettes";
});


Route::get('/bonjour',function(){
    echo 'Bonjour';
// });*/ /* voici comment on pourrait recréer un e autre façon d'afficher notre page laravel. les routes vers lesquelles notre site va apparaître */