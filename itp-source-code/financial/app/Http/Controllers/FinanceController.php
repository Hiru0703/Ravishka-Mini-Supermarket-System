<?php

namespace App\Http\Controllers;

use App\Http\Requests\StatementFormRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function store(StatementFormRequest $request) { //create insert expense function

        try {
            $data = $request->validated(); //validation function
            Task::create($data);
                
            return redirect('/exstate')->with('message','Expenses Information Added Successfully!');

        } catch (\Exception $ex){
            return redirect('/exstate')->with('message','Something Went Wrong!'.$ex);
        }    

    } 
    
}
