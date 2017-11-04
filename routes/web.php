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

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');



Route::get('/','Index1Controller@index');
Route::get('about','Index1Controller@showadministratia');
Route::get('events','Index1Controller@show');
Route::get('contact','Index1Controller@contact');

Route::get('more/{id}','Index1Controller@showarticle')->name('ShowArticle');
    
Route::post('/sendemail','Index1Controller@sendEmail')->name('sendemail');

Route::get('/conditii','Index1Controller@conditii')->name('conditii');

Route::get('specialitati', 'Index1Controller@specialitati');
Route::get('catedre', 'Index1Controller@catedre');
Route::get('elevi', 'Index1Controller@elevi');
Route::get('galerie', 'Index1Controller@galerie');
Route::get('achizitii', 'Index1Controller@achizitie');
Route::get('consiliul-elevilor', 'Index1Controller@consiliu');

Auth::routes();

/*Sidebar routs*/
    //Route::get('admin');
    Route::prefix('admin')->group(function () {
    Route::get('sidebar','Admin\AcasaController@sidebar');
    Route::get('parteneri','Admin\AcasaController@parteneri');
    Route::get('footer','Admin\AcasaController@footer');
    Route::get('regulament','Admin\AdmitereController@regulament');
    Route::get('evenimente','Admin\EvenimenteController@index');
    Route::get('creare','Admin\EvenimenteController@creare');
    Route::post('add', 'Admin\EvenimenteController@store');
    Route::get('{id}/edit', 'Admin\EvenimenteController@edit');
    Route::PATCH('{id}/edit', 'Admin\EvenimenteController@update');
    Route::get('catedre', 'Admin\DespreController@index');
    Route::get('catedre/insert', 'Admin\DespreController@insert');
    Route::post('add/catedre', 'Admin\DespreController@store');
    Route::get('catedre/{id}/edit', 'Admin\DespreController@edit');
    Route::PATCH('catedre/{id}/edit', 'Admin\DespreController@update');
    
    Route::get('galerie', 'Admin\GalerieController@index');
    
    Route::get('specialitati', 'Admin\SpecialitatiController@index');
});
