<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;

class UpdateIncomeController extends Controller
{
    public function update($id) { //create update income function

        $posts = Income::where('income_id' , $id)->get();

        //view update income page
        return view('update_income_page', compact('posts'));
    }

    public function store(Request $request) {

        // return $request;
        $posts = Income::where('income_id' , $request->income_id)->update(['i_date' => $request->i_date , 'month_income' => $request->month_income]);
        
        //redirect income page and create message
        return redirect('/viewincome')->with('message','Income Updated Successfully!');

    }

    public function delete($id) { //create delete income function

        $posts = Income::where('income_id' , $id);
        $posts -> delete();    

        //rediretct income page and create message
        return redirect('/viewincome')->with('message','Income Deleted Successfully!');

    } 
}
