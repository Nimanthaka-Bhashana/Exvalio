<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserItemController extends Controller
{
    public function index()
    {
        return view('user.add-item');
    }
    
    public function store(Request $request)
    {
        // Handle item storage logic here
        return redirect()->back()->with('success', 'Item added successfully');
    }
}
