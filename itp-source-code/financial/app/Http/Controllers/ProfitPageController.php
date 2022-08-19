<?php

namespace App\Http\Controllers;
use App\Models\Income;
use App\Models\Task;

use Illuminate\Http\Request;

class ProfitPageController extends Controller
{
    public function profitmanage(){
        $incomes = Income::all();
        $tasks = Task::all();
        return view('profit_page', compact('incomes','tasks'));
    }
}
