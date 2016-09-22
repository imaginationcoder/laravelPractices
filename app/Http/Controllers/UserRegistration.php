<?php

namespace laravelPractices\Http\Controllers;

use Illuminate\Http\Request;

use laravelPractices\Http\Requests;

class UserRegistration extends Controller
{
    //
    public function postRegister(Request $request) {
        // Retrieve name, username and password
        $name = $request->name;
        $userName = $request->username;
        $password = $request->input('password');

        echo 'Name : '.$name;
        echo '<br>';

        echo 'UserName : '.$userName;
        echo '<br>';

        echo 'Password : '.$password;
        echo '<br>';
    }
}
