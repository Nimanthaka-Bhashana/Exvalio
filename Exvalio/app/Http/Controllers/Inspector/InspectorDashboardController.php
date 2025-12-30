<?php

namespace App\Http\Controllers\Inspector;

use App\Http\Controllers\Controller;

class InspectorDashboardController extends Controller
{
    public function index()
    {
        return view('inspector.dashboard');
    }
}
