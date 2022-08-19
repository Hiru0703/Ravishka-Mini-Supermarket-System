<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcomeView() {
        return view('welcome_finance');
    }
}
