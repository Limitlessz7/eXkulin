<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard_page()
    {
        // Your logic for the dashboard goes here
        return view('dashboard', [
            'title' => 'Dashboard',
        ]);
    }
}
