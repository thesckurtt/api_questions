<?php

namespace App\Livewire;

use Livewire\Component;

class UpdateQuestionForm extends Component
{
    public $request;
    public $question_name;
    public $question_text;
    public $question_alternative_01;
    public $question_alternative_02;
    public $question_alternative_03;
    public $question_alternative_04;
    public $question_alternative_correct;

    public function updateQuestion()
    {
        // dd($this->question_name, $this->question_text,$this->question_alternative_01,$this->question_alternative_02,$this->question_alternative_03,$this->question_alternative_04,$this->question_alternative_correct);

        $user = auth()->user()->questions;
        $question = $user->find($this->request);

        try {
            $question->update([
                'question_name' => $this->question_name,
                'question_text' => $this->question_text,
                'question_alternative_01' => $this->question_alternative_01,
                'question_alternative_02' => $this->question_alternative_02,
                'question_alternative_03' => $this->question_alternative_03,
                'question_alternative_04' => $this->question_alternative_04,
                'question_alternative_correct' => $this->question_alternative_correct,
            ]);

        } catch (\Throwable $th) {
            //throw $th;
        }

    }
    public function render()
    {

        $user = auth()->user()->questions;
        $question = $user->find($this->request);

        $this->question_name = $question->question_name;
        $this->question_text = $question->question_text;
        $this->question_alternative_01 = $question->question_alternative_01;
        $this->question_alternative_02 = $question->question_alternative_02;
        $this->question_alternative_03 = $question->question_alternative_03;
        $this->question_alternative_04 = $question->question_alternative_04;
        $this->question_alternative_correct = $question->question_alternative_correct;

        return view('livewire.update-question-form');
    }
}
