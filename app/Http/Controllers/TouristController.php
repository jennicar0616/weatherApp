<?php

namespace App\Http\Controllers\Tourist;

use Illuminate\Http\Request;

class TouristController extends Controller
{

    public function index()
    {
        echo "hello";
    }
    /**
     * Display home page
    */
    public function home()
    {
        return view('student/profile', ['menu' => 'profile']);
    }
}
