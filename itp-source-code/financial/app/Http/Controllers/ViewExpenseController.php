<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class ViewExpenseController extends Controller
{
    public function viewExpense(){ //create view expense function

        $posts = Task::all();

        //view expenditure page
        return view('expenditure_page', compact('posts'));
    }
}
