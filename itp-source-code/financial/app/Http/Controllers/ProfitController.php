<?php

namespace App\Http\Controllers;

use App\Models\Profit;
use Illuminate\Http\Request;

class ProfitController extends Controller
{
    public function store(Request $request) { //create insert expense function

        try {
            Profit::create([
                'month' => $request->month,
                'total_income' => $request->total_income,
                'total_expense' => $request->total_expense,
                'net_profit' => $request->net_profit
            ]);
                
            return redirect('/profit')->with('message','Details Added Successfully!');

        } catch (\Exception $ex){
            return redirect('/profit')->with('message','Something Went Wrong!'.$ex);
        }    

    } 
}
