<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\Task;

class StatementViewController extends Controller
{
    public function viewIncomeStatement(Request $request){ //create view income statement function

        // if($request->type_of_income == 'Customer Income') {
            $posts = Income::all();
            $posts += Task::all();
            return $posts;
            return view('profit_page', compact('posts'));
        // } 

        // if($request->type_of_income == 'Sales Income') {
        //     $posts = Income::all();
        //     return view('profit_page', compact('posts'));
        // } 

        // if($request->type_of_income == 'Interest Income') {
        //     $posts = Income::all();
        //     return view('profit_page', compact('posts'));
        // } 
       
    }
}
