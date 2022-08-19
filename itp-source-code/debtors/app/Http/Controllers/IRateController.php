<?php

namespace App\Http\Controllers;
use App\Http\Requests\IRatesFromRequest;
use App\Models\irates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class IRateController extends Controller
{
    //Update I_Rates...*************
    public function storeiRates_function(IRatesFromRequest $request){
        //dd($request->all());
          $buyeriRates=new irates;
          $buyeriRates->cusmonth1=$request->cusmonth1;    
          $buyeriRates->cusmonth2=$request->cusmonth2;      
          $buyeriRates->cusmonth3=$request->cusmonth3;     
          $buyeriRates->whbmonth1=$request->whbmonth1;    
          $buyeriRates->whbmonth2=$request->whbmonth2; 
          $buyeriRates->whbmonth3=$request->whbmonth3;
          //$buyeriRates->save();
   
          $data=irates::all();
         //  dd($data);
         
         //return view("DebtorsManagement");

         try {
          $data = $request->validated();
          $buyeriRates->save();
          return view('DebtorsManagement')->with('message','Interest Rates added Successfully...');
  
        } catch (Exception $ex) {
          return view('DebtorsManagement')->with('message','somthing went wrong'.$ex);
  
        }

    
}
//View the latests Irates Buyer Rates....******************
public function viewiRates_function(){
  
   
 //  irates::latest('id')->first();
     $last=irates::all()->last();
    //return $last;

    return view('InterestRteView')->with('last',$last);
   // return view('/winsert')->with('last',$last);
  }



}