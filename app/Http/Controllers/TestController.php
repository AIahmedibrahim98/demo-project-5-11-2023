<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function table()
    {
        return  view('table');
    }

    public function hello(Request $request)
    {
        // dd($request);
        // dump($request->name);

        echo "<h1>" . $request->name . "</h1>";
        echo "<h1>" . $request->age . "</h1>";
        // if ($request->job) {
        if ($request->job) {
            # code...
            echo "<h1>" . $request->job . "</h1>";
        } else {
            echo "<h1>" . "No Job Yet" . "</h1>";
        }
    }
}
