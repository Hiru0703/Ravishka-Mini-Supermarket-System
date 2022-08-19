<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;

class ViewIncomeController extends Controller
{
    public function viewIncome(){ //create view income function

        $posts = Income::all();

        //view income page
        return view('income_page', compact('posts'));
    }
}
