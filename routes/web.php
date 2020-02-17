<?php

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
    return view('Dashbord');
})->name('dashboard');
Route::get('/ajouter_employer','EmployerController@create')->name('add');

Route::post('/ajouter_employer','EmployerController@store')->name('sauvegarde');

Route::get('/gestion',function (){
    return view('gestion');
})->name('gestion');

Route::resources([
    'employer' => 'EmployerController',
]);
