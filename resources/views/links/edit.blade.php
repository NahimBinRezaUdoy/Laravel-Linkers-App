@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 crad">
                <div class="card-body jumbotron">
                    <h2 class="card-title">Edit Link</h2>
                    <form action="/dashboard/links/{{ $link->id }}" method="post">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">Link Name</label>
                                    <input type="text" id="name" name="name"
                                        class="form-control @error('name') is-invalid @enderror" placeholder="My Portfolio"
                                        value="{{ $link->name }}">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="link">Link URL</label>
                                    <input type="text" class="form-control @error('link') is-invalid @enderror" id="link"
                                        name="link" placeholder="https://nahimudoy.netlify.app/"
                                        value="{{ $link->link }}">

                                    @error('link')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-12 ml-1">
                                @csrf
                                <button type="submit" class="btn btn-primary my-2 mr-3">Update</button>
                                <button type="button" class="btn btn-danger"
                                    onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Delete</button>
                            </div>

                        </div>
                    </form>

                    <form id="delete-form" action="/dashboard/links/{{ $link->id }}" method="post">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
