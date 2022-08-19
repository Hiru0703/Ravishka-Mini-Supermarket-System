<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{
    //
    public function store(Request $request) {
        $customer = new Customer();

        $validated = $request -> validate([
            'email' => 'required|Email',
            'password' => 'required|min:8'
        ]);

        $customer -> email = request('email');
        $customer -> password = request('password');

        $customer -> save();

        return redirect('/customer/login');
    }

    public function index(Request $request) {

        $email = request('email');
        $password = request('password');

        $customers = Customer::where('email', $email) -> get();

        foreach($customers as $c) {
            $DBemail = $c->email;
            $DBpassword = $c->password;
        }
        
        $status1 = strcmp($email, $DBemail);
        $status2 = strcmp($password, $DBpassword);

        if($status1 == 0 && $status2 == 0) {
            $request -> session() -> put('userEmail', $email);
            return redirect('/customer/home');
        } else {
            return Redirect::back() -> withErrors('Invalid Login');
        }
            
    }

    public function profileView() {
        $s = session() -> get('userEmail');
        
        if($s != null) {
            return view('/customer/profile');
        } else {
            return redirect('/customer/login');
        }
    }
}
