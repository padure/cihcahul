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

Route::get('specialities/{id}','Index1Controller@showspecialities')->name('ShowSpecialities');
    
Route::post('/sendemail','Index1Controller@sendEmail')->name('sendemail');

Route::get('/conditii','Index1Controller@conditii')->name('conditii');


Route::get('specialities/{id}','Index1Controller@showspecialities')->name('ShowSpecialities');
//AdminController Routes
//Profesori
    Route::get('profesori','AdminController@addprof')->name('shprof');
    Route::post('profesori','AdminController@add')->name('addProf');
    Route::get('updprof/{id}','AdminController@upd')->name('updprof');
    Route::post('updprofl/{id}','AdminController@updprof')->name('updateprof');
    Route::post('updprof','AdminController@updprof')->name('updateprof');
    Route::delete('delete/{id}',function(\App\Administratia $id){
    $id->delete();
    return redirect('profesori');})->name('profDelete');
////Articole
    Route::get('addevent','AdminController@addevent')->name('addevents');
    Route::post('addeven','AdminController@addeven')->name('addeven');
    Route::delete('delete_article/{id}',function(\App\Article $id){
    $id->delete();
    return redirect('addevent');})->name('artDelete');

Route::post('/sendemail','Index1Controller@sendEmail')->name('sendemail');

Route::get('/conditii','Index1Controller@conditii')->name('conditii');

Route::get('lol','AdminController@lol')->name('lol');


Auth::routes();



//Specialitati
    Route::get('admin_specialities','AdminController@showspecialities')->name('shspecial');
    Route::post('add_specialities','AdminController@addspecialities')->name('addspec');
Route::delete('delete_specialities/{id}',function(\App\Speciality $id){
    $id->delete();
    return redirect('admin_specialities');})->name('specDelete');

/*Sidebar routs*/
    //Route::get('admin');
    Route::prefix('admin')->group(function () {
    Route::get('sidebar','Admin\AcasaController@sidebar');
    Route::get('parteneri','Admin\AcasaController@parteneri');
    Route::get('footer','Admin\AcasaController@footer');
    Route::get('regulament','Admin\AdmitereController@regulament');
});
