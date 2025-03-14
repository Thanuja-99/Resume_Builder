<?php

namespace App\Http\Controllers;
use App\Models\Resume; 
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch resumes for the logged-in user (assuming authentication is used)
        $resumes = Resume::where('user_id', auth()->id())->get(); 
        
        return view('dashboard', compact('resumes'));
    }
}
