<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function indexDashboard(Request $request){
        // dd(auth()->user()->with('questions')->get());
        // $questions = auth()->user()->with('questions')->get();
        $questions = auth()->user()->questions;
        return view('dashboard.index', [
            "title" => "Dashboard",
            "title_path" => "",
            "paginate_query" => $request->query('paginate')
        ]);
    }

    public function registerQuestion(){
        return view('dashboard.register_question');
    }
    public function teste(Request $request){
        $user = auth()->user()->questions;
        dd($user->find(22)->delete());
        // echo "hi";
        // dd($request->query('paginate'));
    }
}
