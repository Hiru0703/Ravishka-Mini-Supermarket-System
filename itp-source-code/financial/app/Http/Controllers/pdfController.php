<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\Task;

class pdfController extends Controller
{
    public function pdfManage(){
        $incomes = Income::all();
        $tasks = Task::all();
        return view('report_pdf', compact('incomes','tasks'));
    }
}
