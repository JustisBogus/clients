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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
    return redirect()->route('clients');
       // return view('welcome');
    })->name('home');


    Route::get('/clientform', [
        'uses' => 'ClientController@getForm',
        'as' => 'form'
    
    ]);

    Route::get('/import', [
        'uses' => 'ClientController@getImport',
        'as' => 'import'
    ]);

    Route::post('/clientimport', [
        'uses' => 'ClientController@Import',
        'as' => 'client.import'
    ]);

    Route::post('/createclient', [
        'uses' => 'ClientController@postCreateCLient',
        'as' => 'client.create'
    ]);

    Route::get('/clients', [
        'uses'=> 'ClientController@getClients' ,
        'as' => 'clients'
     
    ]);

    Route::get('/clientsearch', [
        'uses' => 'ClientController@Search',
        'as' => 'search'
    
    ]);

    Route::post('/editclient/{clientidnew}', [
        'uses' => 'ClientController@EditClient',
        'as' => 'client.edit'
 
    ]);

    Route::get('/edit/{clientid}', [
        'uses' => 'ClientController@getEdit',
        'as' => 'edit'
  
    ]);

    Route::get('/clientsearch', [
        'uses' => 'ClientController@Search',
        'as' => 'search'
       
    ]);

    Route::get('/delete/{client_id}', [
        'uses' => 'ClientController@getDelete',
        'as' => 'delete'

    ]);



    
});
