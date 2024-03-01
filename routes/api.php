<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CareerController;
use App\Http\Resources\CareerResource;
use App\Http\Resources\CareerCollection;
use App\Models\Career;
use App\Http\Controllers\QualificationController;
use App\Http\Resources\QualificationResource;
use App\Models\Qualification;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
/*Route::middleware('auth:api')->get('/career', function (Request $request) {
    return $request->career();
});*/
/*Route::get('/careers',['CareerController::class, index']);
Route::get('/careers/{id}',['CareerController::class, show']);
Route::post('/careers',['CareerController::class, store']);*/

//Route::resource('careers', CareerController::class);

Route::get('/careers', function () {
    //return("all careers route active");
    return new CareerCollection(Career::all());
});
Route::get('/careers/{id}', function (string $id) {
    //return("single id career route active");
    return new CareerResource(Career::findOrFail($id));
});
Route::post('/careers', [CareerController::class, 'store']);
/*Route::post('/careers', function () {
    //return("new career route active");
    return new CareerResource(Career::class,'store'));
});*/
Route::get('/qualifications', function () {
    //return("all qualifications route active");
    return new QualificationResource(Qualification::all());
});
Route::get('/qualifications/{id}', function (string $id) {
    //return("single id qualification route active");
    return new QualificationResource(Qualification::findOrFail($id));
});
Route::post('/qualifications', [QualificationController::class, 'store']);
