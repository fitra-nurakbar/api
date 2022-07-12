@extends('layouts.main')

@section('contents')
    <div class="row mt-3 justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center"></h1>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search Movies..." id="search-input">
                <button class="btn btn-dark" type="button" id="search-button">Search</button>
            </div>
        </div>
        <hr>
        <div class="row" id="movie-list">
            
        </div>
    </div>
@endsection
