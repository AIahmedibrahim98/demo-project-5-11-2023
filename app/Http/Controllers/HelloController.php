<?php

namespace App\Http\Controllers;


class HelloController extends Controller
{
    function hello($name, $age = 0)
    {
        return "<h1>Hello $name Your Age  = $age</h1>";
    }
}
