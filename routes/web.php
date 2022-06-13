<?php

use App\Http\Controllers\FraudeController;
use Illuminate\Support\Facades\Auth;
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
//Auth::routes(); 
Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
    Route::get('/fraudes/selectionetudiant','FraudeController@etudiantSearchView'); 
    Route::get('/fraudes/download/{id}','FraudeController@download')->name('download'); 

    Route::post('/fraudes/selectionetudiantpost','FraudeController@etudiantSearchPost')->name('selectstudent'); 
    Route::resource('fraudes', 'FraudeController');
    Route::get('fraudes/{id}/certificate', 'FraudeController@getWorkCertificate')
    ->name('work.certificate');
    Route::get('fraudes/{id}/vacation', 'FraudeController@vacationRequest')
       ->name('work.vacation');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


