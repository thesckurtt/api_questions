@extends('dashboard.layouts.main_layout')
@section('content')
    <div class="row">
        <div class="col-sm">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800 slug-dashboard">Dashboard <span class="sub-slug-dashboard">/ Cadastrar questão</span></h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-8" style="margin: 0 auto;">
            @livewire('registerQuestionForm')
        </div>
    </div>
@endsection
