<?php

namespace App\Http\Controllers;

use App\Http\Requests\IncomeStatementFormRequest;
use App\Models\Income;
use Illuminate\Http\Request;

class IncomeFinanceController extends Controller
{
    public function store(IncomeStatementFormRequest $request) { //create insert income function

        try {
            $data = $request->validated(); //validation function
            Income::create($data);

            return redirect('/statement')->with('message','Income Information Added Successfully!');

        } catch (\Exception $ex){
            return redirect('/statement')->with('message','Something Went Wrong!'.$ex);
        }    

    } 
    
}
