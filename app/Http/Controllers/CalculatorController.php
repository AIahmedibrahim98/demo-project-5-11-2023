<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function sum($x, $y)
    {
        $z = $x + $y;
        return "$x + $y = $z";
    }
    public function sub($x, $y)
    {
        $z = $x - $y;
        return "$x - $y = $z";
    }
    public function multi($x, $y)
    {
        $z = $x * $y;
        return "$x * $y = $z";
    }
    public function div($x, $y)
    {
        $z = $x / $y;
        return "$x / $y = $z";
    }
}
