<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class ExpensePageController extends Controller
{
    public function indexexpensemanage(){
        $tasks = Task::all();
        return view('expense_statement_page', compact('tasks'));
    }
}
