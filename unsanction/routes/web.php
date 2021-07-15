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
// Route::resource('sanction', 'SanctionController');
// Route::get('search','SanctionController@search');

Route::get('sanction','SanctionController@index')->name('sanction');
Route::get('sanction/{query}','SanctionController@search');
Route::get('file-upload', 'FileUploadController@index');

Route::post('file-upload/upload', 'FileUploadController@upload')->name('upload');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('select','CustomerviewController@index'); 
Route::get('parse','SanctionlistController@index'); 

