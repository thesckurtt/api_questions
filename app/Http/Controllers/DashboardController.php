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
        return view('dashboard.question.register_question');
    }
    public function updateQuestion(){
        return view('dashboard.question.edit_question');
    }



    public function teste(Request $request){
        $user = auth()->user()->questions;
        $question = $user->find(69);
        $question->update([
            'question_text' => 'teste'
        ]);

        dd($question);
        // echo "hi";
        // dd($request->query('paginate'));
    }
}
