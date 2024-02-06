<?php

namespace App\Livewire;

use Livewire\Component;

class RegisterQuestionForm extends Component
{
    public $question_name;
    public $question_text;
    public $question_alternative_01;
    public $question_alternative_02;
    public $question_alternative_03;
    public $question_alternative_04;
    public $question_alternative_correct;

    public function saveQuestion()
    {
        // dd($this->question_name, $this->question_text,$this->question_alternative_01,$this->question_alternative_02,$this->question_alternative_03,$this->question_alternative_04,$this->question_alternative_correct);

        $question = auth()->user()->questions();
        $question->create([
            'question_name' => $this->question_name,
            'question_text' => $this->question_text,
            'question_alternative_01' => $this->question_alternative_01,
            'question_alternative_02' => $this->question_alternative_02,
            'question_alternative_03' => $this->question_alternative_03,
            'question_alternative_04' => $this->question_alternative_04,
            'question_alternative_correct' => $this->question_alternative_correct,
        ]);
        dd($question);
    }

    public function render()
    {
        return view('livewire.register-question-form');
    }
}
