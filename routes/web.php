<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\GenerateBillController;
//use Devfaysal\BangladeshGeocode\Models\Division;
//use Devfaysal\BangladeshGeocode\Models\District;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
//    $divisions = Division::all();
//    $districts = District::all();
    $bill = \App\Models\GenerateBill::all();
//    return $data;
    return view('home',compact('bill'));

});
//Route::post('/district-by-division', 'OfficeSetupController@getDistrictsByDivision');
Route::post('/district-by-division', [PdfController::class,'getDistrictsByDivision']);


Route::get('/generate-pdf/{id}',[PdfController::class,'generatePdf'])->name('generate.pdf');
Route::get('/download-pdf',[PdfController::class,'downloadPdf'])->name('download.pdf');

Route::post('/generate-bill-store', [GenerateBillController::class,'store']);
Route::get('/modal-view-data/{id}', [GenerateBillController::class,'showModalData']);
Route::delete('/generate-bill-remove/{id}', [GenerateBillController::class,'destroy']);
Route::get('/all-customer-bill', [GenerateBillController::class,'show']);
Route::get('/generate-bill-edit/{id}', [GenerateBillController::class,'edit']);
Route::post('/generate-bill-update/{id}', [GenerateBillController::class,'update']);
