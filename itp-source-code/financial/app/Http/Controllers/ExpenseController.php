<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function indexexpensemanage(){
        
        return view('expenditure_page');
    }
}
