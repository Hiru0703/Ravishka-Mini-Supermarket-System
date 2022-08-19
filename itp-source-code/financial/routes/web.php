<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\IncomeFinanceController;
use App\Http\Controllers\ProfitController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ExpensePageController;
use App\Http\Controllers\ProfitPageController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ViewExpenseController;
use App\Http\Controllers\ViewIncomeController;
use App\Http\Controllers\StatementViewController;
use App\Http\Controllers\UpdateExpenseController;
use App\Http\Controllers\UpdateIncomeController;
use App\Http\Controllers\Piechart;
use App\Http\Controllers\IncomePiechart;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\pdfController;
use App\Http\Controllers\servicesController;

Route::get('/welcome',[WelcomeController::class,'welcomeView']);

Route::get('/statement',[PageController::class,'indexfinancemanage']);

Route::get('/exstate',[ExpensePageController::class,'indexexpensemanage']);

Route::get('/profit',[ProfitPageController::class,'profitmanage']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/expensesaveTask/store', [FinanceController::class, 'store'])->name('expensesaveTask.store');

Route::post('/saveTask/store', [IncomeFinanceController::class, 'store'])->name('saveTask.store');

Route::post('/profitsaveTask/store', [ProfitController::class, 'store'])->name('profitsaveTask.store');

Route::post('/eupdate/store', [UpdateExpenseController::class, 'store'])->name('eupdate.store');

Route::post('/update/store', [UpdateIncomeController::class, 'store'])->name('update.store');

Route::get('/expense', [ExpenseController::class,'indexexpensemanage']);

Route::get('/income', [IncomeController::class,'indexincomemanage']);

Route::get('/viewexpense', [ViewExpenseController::class, 'viewExpense'])->name('viewexpense');

Route::get('/viewincome', [ViewIncomeController::class, 'viewIncome'])->name('viewincome');

Route::get('/viewincomestatement', [StatementViewController::class, 'viewIncomeStatement'])->name('viewincomestatement');

Route::get('/eupdate/{id}', [UpdateExpenseController::class, 'update'])->name('eupdate');

Route::get('/update/{id}', [UpdateIncomeController::class, 'update'])->name('update');

Route::get('/delete/{id}', [UpdateExpenseController::class, 'delete'])->name('delete');

Route::get('/idelete/{id}', [UpdateIncomeController::class, 'delete'])->name('idelete');

Route::get('/pie', [Piechart::class, 'pieChart']);

Route::get('/incomepie', [IncomePiechart::class, 'incomepieChart']);

Route::get('/report', [ReportController::class, 'reportManage']);

Route::get('/export_report_pdf', [ReportController::class, 'export_report_pdf'])->name('export_report_pdf');

Route::get('/pdf', [pdfController::class, 'pdfManage']);

Route::get('/ser', [servicesController::class, 'servicesView']);







