<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lec5Controller extends Controller
{
    public function lec5_blade()
    {
        return view('lec5');
    }

    public function lec5_table()
    {
        $name = 'ahmed';
        return view('lec5_table', ['koko' => $name]);
    }
    public function com()
    {
        return view('lec5_com');
    }
}
