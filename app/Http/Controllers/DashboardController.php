<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function indexDashboard(Request $request)
    {
        $questions = auth()->user()->questions;
        return view('dashboard.index', [
            "title" => "Dashboard",
            "title_path" => "",
            "paginate_query" => $request->query('paginate')
        ]);
    }

    public function registerQuestion()
    {
        return view('dashboard.question.register_question');
    }
    public function updateQuestion(Request $request)
    {
        $user = auth()->user()->questions;
        $question = $user->find(request()->id);

        if (!$question) {
            return redirect()->route('dashboard.index');
        }

        return view('dashboard.question.update_question', [
            'request' => request()->id
        ]);
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('dashboard.index');
    }

    public function teste(Request $request)
    {
        // $teste = throw new Exception('teste');
        // try {
        //     //code...
        // } catch (\Throwable $th) {
        //     //throw $th;
        // }
        // $user = auth()->user()->questions;
        // $question = $user->find(69);
        // $question->update([
        //     'question_text' => 'teste'
        // ]);
        // dd(request()->id);
        // echo "hi";
        // dd($request->query('paginate'));

        // dd(auth()->user()->with('questions')->get());
        // $questions = auth()->user()->with('questions')->get();

        // $string = "hello world";
        // if(str_contains($string, 'hello')){
        //     echo "Yes!!!";
        // }

        $fun = function(){
            return "hello world";
        };

        echo $fun;
    }
}
