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
            {{-- @livewire('tableofquestion') --}}
            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Example multiple select</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div style="display: flex; justify-content: flex-end">
                    <button type="button" class="btn btn-success">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
