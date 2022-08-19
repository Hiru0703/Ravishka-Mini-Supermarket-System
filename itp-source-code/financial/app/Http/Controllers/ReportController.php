<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\Task;
use App\Models\Profit;
use Illuminate\Support\Facades\DB;
use PDF;

class ReportController extends Controller
{ 
    public function reportManage(){
        $incomes = Income::all();
        $tasks = Task::all();
        $profits = Profit::all();
        return view('report', compact('incomes','tasks','profits'));
    }

    public function export_report_pdf() {
        $incomes = Income::all();
        $tasks = Task::all();

        $pdf = PDF::loadView('report_pdf', ['incomes' => $incomes, 'tasks' => $tasks]);

        return $pdf->download('report_pdf.pdf');

    }
}
