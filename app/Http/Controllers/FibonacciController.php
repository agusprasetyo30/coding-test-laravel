<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function index()
    {
        return view('test.fibonacci');
    }

    public function fibonnacciCount(Request $request)
    {
        $last_number = 0;
        $current_number = 1;

        $count = $request->count;
        
        $arr_data = [0, 1]; // Default
        
        for ($i=0; $i < $count - 2; $i++) { // dikurangi 2 dikarenakan ada default 2 angka yaitu 0 dan 1 
            $output = $current_number + $last_number;

            array_push($arr_data, $output);

            $last_number = $current_number;
            $current_number = $output;
        }

        return view('test.fibonacci', compact('arr_data', 'count'));
    }
}
