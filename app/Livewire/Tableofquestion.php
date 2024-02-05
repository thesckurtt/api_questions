<?php

namespace App\Livewire;

use App\Models\Question;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;
use Livewire\WithPagination;

class Tableofquestion extends Component
{
    use WithPagination;

    public function deleteQuestion($question_id){
        $user = auth()->user()->questions;
        $user->find($question_id)->delete();
    }


    public function render()
    {
        $questions_per_page = 5;
        $questions = auth()->user()->questions()->paginate($questions_per_page);
        $paginator = $questions->links()->elements;
        $current_page = $questions->links()->paginator->currentPage();
        $total_questions = $questions->links()->paginator->total();

        return view('livewire.tableofquestion', [
            'questions' => $questions,
            'paginator' => $paginator,
            'current_page' => $current_page,
            'questions_per_page' => $questions_per_page,
            'total_questions' => $total_questions
        ]);
    }
}
