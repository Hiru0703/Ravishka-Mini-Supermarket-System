<?php

namespace App\Http\Controllers;
use App\Http\Requests\DBuyersFormRequest;
use App\Models\Whbuyer;
use App\Models\irates;
use App\Models\DebtRCustomers;
use App\Http\Controllers\IRateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class WhbuyerController extends Controller
{
  // public function store(DBuyersFormRequest $request){

  // }




  //store wh_Buyers Details...*********************
    public function store(DBuyersFormRequest $request){
   
 
     //dd($request->all());
       $whbuyer=new Whbuyer;
       $whbuyer->D_CID=$request->D_CID;    
       $whbuyer->whName=$request->whName;      
       $whbuyer->whPlan=$request->whPlan;     
       $whbuyer->whAmount=$request->whAmount;    
       $whbuyer->whIrate=$request->whIrate;
       $whbuyer->wh_D_Amount=$request->wh_D_Amount;  
       $whbuyer->wh_T_Amount=$request->wh_T_Amount; 
       $whbuyer->whBuydate=$request->whBuydate;
      

      //  $data=Whbuyer::all();
      //  dd($data);
      try {
        $data = $request->validated();
        $whbuyer->save();
        return view('DebtorsManagement')->with('message','Wholesale Buyer added Successfully...');

      } catch (Exception $ex) {
        return view('DebtorsManagement')->with('message','somthing went wrong'.$ex);

      }

    //  return view('DebtorsManagement')-with('message','wh buyers added successfully');

      // return view("DebtorsManagement");
    }

   

   //Search Wh_Buyer Details....*****************
  public function searchWhbuyer(Request $request){
    $D_CID  = $request->get('D_CID') ;
    $whName = $request->get('whName') ;
    $whbuyer= Whbuyer::where('D_CID',$D_CID)->where('whName',$whName)->get();
    
    // return $whbuyer;
   return view('SearchWhsDebtors')->with('whbuyer',$whbuyer);

  }




  //View Search Wh_Buyer Details....******************
  public function whedit_function($recordNo){
    
    $whedit = whbuyer::where('recordNo',$recordNo)->get();
     $last=irates::all()->last();
    // return $last;
    return view('WhDebtorDetailsEdit')->with('last',$last)->with('whedit',$whedit); 
        //return view('WhDebtorDetailsEdit');
   // return view('WhDebtorDetailsEdit')->with('whedit',$whedit);


   
      //$last=irates::all()->last();
  // return $last;

  
      // return view('InsertWH_Buyers');
  

  }



  //Update Wh_Buyers Details....*********************
  public function whupdate_function(Request $request,$recordNo){
    $whbuyer =  whbuyer::find($recordNo);
    $whbuyer->D_CID=$request->D_CID;   
    $whbuyer->whName=$request->whName;
    $whbuyer->whPlan=$request->whPlan;
    //$whbuyer->whAmount=$request->whAmount;
    $whbuyer->whIrate=$request->whIrate;
    $whbuyer->wh_D_Amount=$request->wh_D_Amount;  
    $whbuyer->wh_T_Amount=$request->wh_T_Amount; 
    $whbuyer->save();
   // $last=irates::all()->last();
    return view("DebtorsManagement")->with('message','Wholesale Buyer Updated Successfully...');


    
  }

  // Delete Wh_Buyers Details ...
  public function whdelete_function($recordNo){
    $whbuyer =  whbuyer::find($recordNo)->delete();
    return view("DebtorsManagement")->with('message','Wholesale Buyer remove succeessfully...');
   
  }

  }
     
