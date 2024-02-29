<?php

use Illuminate\Support\Facades\Route;
use App\Models\Career;
use Http\Controllers\CareerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('careers', function () {
    return view('careers', [
        'careers' => Career::all()
    ]);
});

Route::get('careers/{career}', function (Career $career) {
    return view('career', [
        //'career' => Career::findOrFail($id)
        'career' => $career
    ]);
});

Route::post('careers', [CareerController::class, 'store']);

/*Route::post('careers', function (Request $request) {
  $reversed = strrev($request->input('reverse_this'));
  return $reversed;
});*/

