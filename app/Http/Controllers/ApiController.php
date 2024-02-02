<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function random()
    {
        try {
            $question = Question::inRandomOrder()->first();

            $json_output = [
                "id" => $question->id,
                "question_name" => $question->question_name,
                "question_text" => $question->question_text,
                "alternatives" => [
                    "a" => $question->question_alternative_01,
                    "b" => $question->question_alternative_02,
                    "c" => $question->question_alternative_03,
                    "d" => $question->question_alternative_04,
                ],
                "correct_alternative" => $question->question_alternative_correct,
                "error" => false
            ];
        } catch (\Throwable $th) {
            $json_output = [
                "error" => true
            ];
        }
        return response()->json($json_output);
    }

    public function onlyQuestion($id_question)
    {
        try {
            $question = Question::find($id_question);

            $json_output = [
                "id" => $question->id,
                "question_name" => $question->question_name,
                "question_text" => $question->question_text,
                "alternatives" => [
                    "a" => $question->question_alternative_01,
                    "b" => $question->question_alternative_02,
                    "c" => $question->question_alternative_03,
                    "d" => $question->question_alternative_04,
                ],
                "correct_alternative" => $question->question_alternative_correct,
                "error" => false
            ];
        } catch (\Throwable $th) {
            $json_output = [
                "error" => true
            ];
        }
        return response()->json($json_output);
    }
}
