<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WhbuyerController;
use App\Http\Controllers\IRateController;
use App\Http\Controllers\RCustomersController;



Route::get('/',[PageController::class,'indexservices']);

Route::get('/debtmanage',[PageController::class,'indexdebtormanage']);

Route::get('/winsert',[PageController::class,'indexwhsinsert']);

Route::get('/rcusinsert',[PageController::class,'indexrcusinsert']);

Route::get('/wsearch',[PageController::class,'indexwhssearch']);

Route::get('/rcussearch',[PageController::class,'indexrcusssearch']);

Route::get('/IRateupdate',[PageController::class,'indexirates']);

Route::get('/rcusinsert',[PageController::class,'indexrcusinsert']);

Route::get('/DebtorsReport', [PageController::class, 'indexdebtreport']);

//Route::get('/IRateView',[PageController::class,'indexiratesview']);


Route::post('/saveWhbuyer',[WhbuyerController::class,'store']);

Route::get('/searchWhbuyer',[WhbuyerController::class,'searchWhbuyer']);


Route::get('click_view/{recordNo}',[WhbuyerController::class,'whedit_function']);

Route::post('/update/{recordNo}', [WhbuyerController::class,'whupdate_function']);

Route::post('/delete/{recordNo}', [WhbuyerController::class,'whdelete_function']);


//Regulur Customers 
Route::post('/saveRCusbuyer',[RCustomersController::class,'rcusstore']);

Route::get('/searcRCushbuyer',[RCustomersController::class,'searchRCusbuyer']);

Route::get('click_view_rcus/{rcusrecordNo}',[RCustomersController::class,'rcusedit_function']);

Route::post('/update_rcus/{rcusrecordNo}', [RCustomersController::class,'rcusupdate_function']);

Route::post('/delete_rcus/{rcusrecordNo}', [RCustomersController::class,'rcusdelete_function']);




Route::post('/saveiRates',[IRateController::class,'storeiRates_function']);

Route::get('/IRateView',[IRateController::class,'viewiRates_function']);


