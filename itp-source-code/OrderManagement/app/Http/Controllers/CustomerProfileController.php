<?php

namespace App\Http\Controllers;

use App\Models\CustomerProfile;
use Illuminate\Http\Request;

class CustomerProfileController extends Controller
{
    //
    public function store(Request $request) {
        $cp = new CustomerProfile();
        $email = session() -> get('userEmail');

        $cp -> name = request('name');
        $cp -> surname  = request('surname');
        $cp -> mobile_phone = request('mobilePhone');
        $cp -> land_phone = request('landLine');
        $cp -> address_line1 = request('addressLine1');
        $cp -> address_line2 = request('addressLine2');
        $cp -> city = request('city');
        $cp -> reviews = request('reviews');
        $cp -> email = $email;

        $cp -> save();

        return redirect('/customer/home');
    }

    public function updateInfo() {
        $s = session() -> get('userEmail');
        
        if($s != null) {
            return view('/customer/profile');
        } else {
            return redirect('/customer/login');
        }
    }

    public function updatedInfo() {
        
    }
}
