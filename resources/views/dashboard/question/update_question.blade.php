@extends('dashboard.layouts.main_layout')
@section('content')
    <div class="row">
        <div class="col-sm">
            @livewire('updateQuestionForm', [
                'request' => $request
            ])
        </div>
    </div>
@endsection
