<?php

namespace App\Http\Controllers;

use App\Models\CustomerProfile;
use Illuminate\Http\Request;

class CustomerProfileController extends Controller
{
    //
    public function store(Request $request)
    {

        if (CustomerProfile::where('email',  session()->get('userEmail'))->exists()) {

            $cus = CustomerProfile::where('email',  session()->get('userEmail'))->get();
            // return $cus[0]->id;
            $cp = CustomerProfile::find($cus[0]->id);
        } else {
            $cp = new CustomerProfile();
        }


        $email = session()->get('userEmail');

        $cp->name = $request->input('name');
        $cp->surname  = $request->input('surname');
        $cp->mobile_phone = $request->input('mobilePhone');
        $cp->land_phone = $request->input('landLine');
        $cp->address_line1 = $request->input('addressLine1');
        $cp->address_line2 = $request->input('addressLine2');
        $cp->city = $request->input('city');
        $cp->email = $email;

        $cp->save();

        return redirect('/customer/home');
    }














    

    // public function updateInfo()
    // {
    //     $s = session()->get('userEmail');

    //     if ($s != null) {
    //         return view('/customer/profile');
    //     } else {
    //         return redirect('/customer/login');
    //     }
    // }

    // public function updatedInfo()
    // {
    // }

    ///////////////////////////////////////////////////////try
    //     public function show(Request $request) {

    //         $email = session() -> get('userEmail');

    //         $name = $request->input('name');
    //         $surname  = $request->input('surname');
    //         $mobile_phone = $request->input('mobilePhone');
    //         $land_phone = $request->input('landLine');
    //         $address_line1 = $request->input('addressLine1');
    //         $address_line2 = $request->input('addressLine2');
    //         $city = $request->input('city');
    //         $email = $email;

    //         $cus = CustomerProfile::where('email',$email)->get();

    //         return view('profileUpdate', compact('profileUpdate'));
    //         return redirect('/customer/home');
    //     }

}
