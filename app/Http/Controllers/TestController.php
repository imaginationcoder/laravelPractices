<?php

namespace laravelPractices\Http\Controllers;

use Illuminate\Http\Request;

use laravelPractices\Http\Requests;

class TestController extends Controller
{
    //
    public function index(){
        echo "<br>Test Controller.";
    }
}
