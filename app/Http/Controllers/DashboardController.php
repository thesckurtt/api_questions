<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function indexDashboard(){
        // echo "hello world";
        // echo "hi";
        // dd(auth()->user()->with('questions')->get());
        // $questions = auth()->user()->with('questions')->get();
        $questions = auth()->user()->questions;
        return view('dashboard.index', [
            "title" => "Dashboard",
            "title_path" => "",
        ]);
    }
}
