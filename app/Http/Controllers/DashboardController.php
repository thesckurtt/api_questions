<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function indexDashboard(Request $request){
        // echo "hello world";
        // echo "hi";
        // dd(auth()->user()->with('questions')->get());
        // $questions = auth()->user()->with('questions')->get();
        $questions = auth()->user()->questions;
        return view('dashboard.index', [
            "title" => "Dashboard",
            "title_path" => "",
            "paginate_query" => $request->query('paginate')
        ]);
    }

    public function teste(Request $request){
        echo "hi";
        dd($request->query('paginate'));
    }
}
