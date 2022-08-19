<?php

namespace App\Http\Controllers;
use App\Models\Whbuyer;
use App\Models\irates;
use App\Models\DebtRCustomers;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function indexservices(){
        return view('servicesdash');
    }





    public function indexdebtormanage(){
        return view('DebtorsManagement');
    }



    public function indexwhsinsert(){
        $last=irates::all()->last();
    // return $last;
    return view('InsertWH_Buyers')->with('last',$last); 
    }

    public function indexwhssearch(){
        return view('SearchWhsDebtors');
    }

    public function whedit_function(){
        $last=irates::all()->last();
    // return $last;
    return view('WhDebtorDetailsEdit')->with('last',$last); 
        //return view('WhDebtorDetailsEdit');
    }



    public function indexrcusinsert(){
        $last=irates::all()->last();
    // return $last;
    return view('InsertR_Customers')->with('last',$last); 
    }

    public function indexrcusssearch(){
        return view('SearchRCusDebtors');
    }

    public function rcusedit_function(){
        $last=irates::all()->last();
    // return $last;
    return view('RCusDebtorDetailsEdit')->with('last',$last); 
        //return view('WhDebtorDetailsEdit');
    }






    

    public function indexirates(){
        return view('InterestRteUpdate');
    }

    public function indexiratesview(){
        return view('InterestRteView');
    }


    
    public function indexdebtreport(){
        $wtotal = Whbuyer::sum('wh_D_Amount');
        $ctotal = DebtRCustomers::sum('rcus_D_Amount');
        // return  $ctotal;
        return view('DebtorsReport')->with('ctotal',$ctotal)->with('wtotal',$wtotal);
    }
    


}
