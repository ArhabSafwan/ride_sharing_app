<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function submit()
    {
        //validate the phone number
        $request->validate([
        'phone'=>'required|numeric|min:10'
        ]);
        //find or create a user model

        //send the user a one time use code

        //retirn back a response
    }
}
