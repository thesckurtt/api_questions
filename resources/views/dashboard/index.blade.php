@extends('dashboard.layouts.main_layout')
@section('content')
    {{-- Main Content --}}
    {{-- Page Heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="{{route('dashboard.registerQuestion')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fa-solid fa-plus"></i> Nova Questão</a>
    </div>

    {{-- Main Content of dashboard here --}}
    <div class="row">
        <div class="col-sm">
            @livewire('tableofquestion')
        </div>
    </div>
@endsection
