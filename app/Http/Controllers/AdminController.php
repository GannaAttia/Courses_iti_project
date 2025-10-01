<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Handle the incoming request.
     */
public function dashboard()
    {
        return view('dashboard'); // resources/views/dashboard.blade.php
    }
}
