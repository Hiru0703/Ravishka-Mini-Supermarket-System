<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IncomePieChart extends Controller
{
    public function incomepieChart() { //display type of income and monthly income in pie chart

        $result = DB::select(DB::raw("select type_of_income, month_income from incomes"));
        $chartData = "";
        foreach($result  as $list) {
            $chartData.="['".$list->type_of_income."',      ".$list->month_income."],";
        } 
        $arr['chartData']=rtrim($chartData,",");
        return view('incomepiechart',$arr);
    }
}
