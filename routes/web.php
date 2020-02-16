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



Route::view('/', 'welcome')->name('index');
Route::view('/comptabilite/', 'comptabilite.index')->name('comptabilite');
Route::view('/paiements/', 'paie.index')->name('paiements');
Route::view('/paiements/employe', 'paie.employe')->name('employe');
Route::view('/paiements/employe/ajouter', 'paie.employe-ajouter')->name('employe.ajouter');
Route::view('/paiements/employe/voir', 'paie.employe-voir')->name('employe.voir');
Route::view('/stocks/', 'stock.index')->name('stocks');
Route::view('/connexion/', 'base.connexion')->name('connexion');
Route::view('/inscription/', 'base.inscription')->name('inscription');

