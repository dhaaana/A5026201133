<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    // Tugas 5 PHP
    function showForm()
    {
        return view('tugas5');
    }

    function resultGreetings()
    {
        return view('palindrome');
    }

    // ETS
    function showEts() {
        return view('ets');
    }

}
