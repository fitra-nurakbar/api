@extends('layouts.main')

@section('contents')
    <div class="row mt-3 justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center">Search</h1>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search Movies..." id="search-input">
                <button class="btn btn-dark" type="button" id="search-button">Search</button>
            </div>
        </div>
        <hr>
        <div class="row" id="movie-list">
            {{-- movies content --}}
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Lupa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                        {{-- modal contents --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
