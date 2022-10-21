<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // make index function
    public function index()
    {
        return view('dashboard.index');
    }

    
}
