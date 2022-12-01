<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function RegisterView(){
        return view('auth.register');
    }

    public function InsertDB(){
        
    }
}
