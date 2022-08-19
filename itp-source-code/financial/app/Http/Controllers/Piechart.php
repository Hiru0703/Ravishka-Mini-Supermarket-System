<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Piechart extends Controller
{
    public function pieChart() { //display type of expense and monthly expense in pie chart

        $result = DB::select(DB::raw("select type_of_expense, month_expense from tasks"));
        $chartData = "";
        foreach($result  as $list) {
            $chartData.="['".$list->type_of_expense."',      ".$list->month_expense."],";
        } 
        $arr['chartData']=rtrim($chartData,",");
        return view('piechart',$arr);
    }
}