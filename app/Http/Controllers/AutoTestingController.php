<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutoTestingController extends Controller
{
    public function showMessage()
    {
        return "Welcome to the AutoTesting application!";
    }

    public function sum()
    {
        $num1 = request('num1');
        $num2 = request('num2');

        return $num1 + $num2;
    }
}
