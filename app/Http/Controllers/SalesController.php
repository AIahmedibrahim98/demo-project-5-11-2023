<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        $agents = [
            'ahmed' => ['jun' => 5000, 'feb' => 10000, 'march' => 15000],
            'sara' => ['jun' => 23423, 'feb' => 100300, 'march' => 4432],
            'ali' => ['jun' => 504400, 'feb' => 10000, 'march' => 2432],
            'maha' => ['jun' => 502300, 'feb' => 10423000, 'march' => 2234],
            'soha' => ['jun' => 5000, 'feb' => 10000423, 'march' => 4234],
        ];

        return view('sales', ['agents' => $agents]);
    }
}
