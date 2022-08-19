<?php

namespace App\Http\Controllers;
use App\Models\Income;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function indexfinancemanage(){
        $incomes = Income::all();
        return view('income_expenditure_statement', compact('incomes'));
    }
}
