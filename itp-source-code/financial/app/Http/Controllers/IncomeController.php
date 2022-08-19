<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function indexincomemanage(){
        return view('income_page');
    }
}
