<?php

namespace App\Http\Controllers;
use App\Http\Requests\RCusFromRequest;
use App\Models\DebtRCustomers;
use App\Models\irates;
use App\Http\Controllers\IRateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class RCustomersController extends Controller
{
    

     //store rcus_Buyers Details...*********************
     public function rcusstore(RCusFromRequest $request){
   
 
        //dd($request->all());
          $rcusbuyer=new DebtRCustomers;
          $rcusbuyer->rcusD_CID=$request->rcusD_CID;    
          $rcusbuyer->rcusName=$request->rcusName;      
          $rcusbuyer->rcusPlan=$request->rcusPlan;     
          $rcusbuyer->rcusAmount=$request->rcusAmount;    
          $rcusbuyer->rcusIrate=$request->rcusIrate;
          $rcusbuyer->rcus_D_Amount=$request->rcus_D_Amount;  
          $rcusbuyer->rcus_T_Amount=$request->rcus_T_Amount; 
          $rcusbuyer->rcusBuydate=$request->rcusBuydate;
         
   
         //  $data=rcusbuyer::all();
         //  dd($data);
         try {
           $data = $request->validated();
           $rcusbuyer->save();
           return view('DebtorsManagement')->with('message','regular Buyer added Successfully...');
   
         } catch (Exception $ex) {
           return view('DebtorsManagement')->with('message','somthing went wrong'.$ex);
   
         }
   
       
       }


         //Search Wh_Buyer Details....*****************
  public function searchRCusbuyer(Request $request){
    $rcusD_CID  = $request->get('rcusD_CID') ;
    $rcusName = $request->get('rcusName') ;
    $rcusbuyer= DebtRCustomers::where('rcusD_CID',$rcusD_CID)->where('rcusName',$rcusName)->get();
    
    // return $whbuyer;
   return view('SearchRCusDebtors')->with('rcusbuyer',$rcusbuyer);

  }


         //View Search Wh_Buyer Details....******************
  public function rcusedit_function($rcusrecordNo){
    
    $rcusedit = DebtRCustomers::where('rcusrecordNo',$rcusrecordNo)->get();
     $last=irates::all()->last();
    // return $last;
    return view('RCusDebtorDetailsEdit')->with('last',$last)->with('rcusedit',$rcusedit); 
        //return view('WhDebtorDetailsEdit');
   // return view('WhDebtorDetailsEdit')->with('whedit',$whedit);


   
      //$last=irates::all()->last();
  // return $last;

  
      // return view('InsertWH_Buyers');
  

  }



  //Update Wh_Buyers Details....*********************
  public function rcusupdate_function(Request $request,$rcusrecordNo){
    $rcusbuyer =  DebtRCustomers::find($rcusrecordNo);
    $rcusbuyer->rcusD_CID=$request->rcusD_CID;   
    $rcusbuyer->rcusName=$request->rcusName;
    $rcusbuyer->rcusPlan=$request->rcusPlan;
    //$rcusbuyer->rcusAmount=$request->rcusAmount;
    $rcusbuyer->rcusIrate=$request->rcusIrate;
    $rcusbuyer->rcus_D_Amount=$request->rcus_D_Amount;  
    $rcusbuyer->rcus_T_Amount=$request->rcus_T_Amount; 
    $rcusbuyer->save();
   // $last=irates::all()->last();
    return view("DebtorsManagement")->with('message','regular Customer Updated Successfully...');


    
  }

  // Delete Wh_Buyers Details ...
  public function rcusdelete_function($rcusrecordNo){
    $rcusbuyer =  DebtRCustomers::find($rcusrecordNo)->delete();
    return view("DebtorsManagement")->with('message','Reguluer Customer remove succeessfully...');
   
  }

  }