<?php

namespace App\Livewire;

use App\Models\Question;
use App\Models\User;
use Livewire\Component;

class Tableofquestion extends Component
{

    public function render()
    {
        $questions = Question::with('user')->where('user_id', auth()->user()->id)->paginate(5);

        return view('livewire.tableofquestion', [
            'questions' => $questions
        ]);
    }
}
