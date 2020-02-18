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
Route::get('/management', function () {
    return view('managements');

})->name('management');
Route::post('/management','PostesController@store')->name('newPoste');
Route::get('/ajouter_employer','EmployerController@create')->name('add');

Route::post('/ajouter_employer','EmployerController@store')->name('sauvegarde');
Route::get('/nouveau_conge','EmployerController@nouveau_conge_vue')->name('conge.nouveau');
Route::post('/nouveau_conge','CongesController@store')->name('new');

Route::get('/gestion','AbsenceController@create')->name('gestion');
Route::post('/gestion','AbsenceController@store')->name('absence');

Route::resources([
    'employer' => 'EmployerController',
]);Route::resources([
    'employer' => 'EmployerController',
]);
