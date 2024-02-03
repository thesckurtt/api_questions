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

    public function render()
    {
        $questions = Question::with('user')->where('user_id', auth()->user()->id)->paginate(2);
        $paginator = $questions->links()->elements;
        $current_page = $questions->links()->paginator->currentPage();
        return view('livewire.tableofquestion', [
            'questions' => $questions,
            'paginator' => $paginator,
            'current_page' => $current_page
        ]);
    }
}
