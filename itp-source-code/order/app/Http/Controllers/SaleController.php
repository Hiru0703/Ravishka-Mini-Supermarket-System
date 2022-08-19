<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;


class SaleController extends Controller
{
    public function addOrder(Request $request) {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'zip' => 'required|string|max:255',
            'cardname' => 'required|string|max:255',
            'cardno' => 'required|digits:4',
            'exmonth' => 'required|string|max:255',
            'exyear' => 'required|numeric',
            'cvv' => 'required|numeric',
            
        ],[
            'name.required' => 'Name cannot be empty',
            'email.required' => 'Email cannot be empty',
            'address.required' => 'Address cannot be empty',
            'city.required' => 'City cannot be empty',
            'district.required' => 'District cannot be empty',
            'zip.required' => 'Zip cannot be empty',
            'cardname.required' => 'Card Name cannot be empty',
            'cardno.required' => 'Card Number cannot be empty',
            'exmonth.required' => 'Card Expiry Month cannot be empty',
            'exyear.required' => 'Card Expiry Year cannot be empty',
            'cvv.required' => 'Card CVV Code cannot be empty',
            
        ]);

        $address = [
            'street' => $request->address,
            'city' => $request->city,
            'district' => $request->district,
            'zip' => $request->zip,
        ];

        $payment_details = [
            'card_name' => $request->cardname,
            'card_number' => $request->cardno,
            'expiry_month' => $request->exmonth,
            'expiry_year' => $request->exyear,
            'cvv' => $request->cvv
        ];

        $sale = Sale::create([
            'sale_id' => mt_rand(1111111,9999999),
            'name' => $request->name,
            'email' => $request->email,
            'address' => $address,
            'payment_details' => $payment_details,
            'items' => session()->get('cart'),
            'total' => (int)session()->get('cart_total'),
            'status' => 'completed',
        ]);

        //empty session and redirect
        session()->flash('success', 'Order Placed successfull!');
        session()->forget('cart');
        session()->forget('cart_total');

        return redirect()->route('checkout.sucess',['id' => $sale->sale_id]);

    }

    public function placedOrder($id)
    {
        return view('checkout-success')->with(['id' => $id]);
    }
}
