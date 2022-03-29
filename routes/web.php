<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NotesController;

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

Route::group(['prefix'=> 'notes'], function(){
    Route::get('',[NotesController::class,'index']);
    Route::get('/{id}',[NotesController::class, 'getById']);
    Route::post('',[NotesController::class, 'create']);
    Route::patch('/{id}',[NotesController::class, 'update']);
    Route::delete('/{id}',[NotesController::class, 'delete']);
});


