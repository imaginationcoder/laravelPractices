<?php

namespace laravelPractices\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use laravelPractices\Http\Requests;

class CookieController extends Controller
{
    //

    public function setCookie(Request $request){
        echo 'Set Cookie';
        echo '<br>';
        $minutes = 1;
        $response = new Response('Hello World');
        $response->withCookie(cookie('name', 'upender', $minutes));
        return $response;
    }

    public function  getCookie(Request $request){
        echo 'Get Cookie';
        $value = $request->cookie('name');
        echo '<br>';
        echo $value;
    }
}
