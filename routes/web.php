<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\GenerateBillController;
use Devfaysal\BangladeshGeocode\Models\Division;
use Devfaysal\BangladeshGeocode\Models\District;

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
    $divisions = Division::all();
    $districts = District::all();
    return view('home',compact('divisions', 'districts'));

});
//Route::post('/district-by-division', 'OfficeSetupController@getDistrictsByDivision');
Route::post('/district-by-division', [PdfController::class,'getDistrictsByDivision']);


Route::get('/generate-pdf',[PdfController::class,'generatePdf']);
Route::get('/download-pdf',[PdfController::class,'downloadPdf']);

Route::post('/generateBill/store/', [GenerateBillController::class,'store']);
