<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function store(Request $request) {
        $Contact = new Contact();

        $Contact -> name = request('name');
        $Contact -> email = request('email');
        $Contact -> mobile_phone = request('mobile_phone');
        $Contact -> subject = request('subject');
        $Contact -> message = request('message');

        $Contact -> save();

        return redirect('/customer/home');
}
}
