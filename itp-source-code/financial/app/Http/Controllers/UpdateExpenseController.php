<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class UpdateExpenseController extends Controller
{
    public function update($id) { //create update expense function

        $posts = Task::where('expense_id' , $id)->get();

        //view update expenditure page
        return view('update_expenditure_page', compact('posts')); 
    }

    public function store(Request $request) {

        // return $request;
        $posts = Task::where('expense_id' , $request->expense_id)->update(['e_date' => $request->e_date , 'month_expense' => $request->month_expense]);
        
        //redirect expenditure page create message
        return redirect('/viewexpense')->with('message','Expense Updated Successfully!');

    }

    public function delete($id) { //create delete expense function

        $posts = Task::where('expense_id' , $id);
        $posts -> delete();    

        //redirect expenditure page create message
        return redirect('/viewexpense')->with('message','Expense Deleted Successfully!');

    } 
}
