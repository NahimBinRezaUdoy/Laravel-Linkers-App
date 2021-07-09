@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 crad">
                <div class="card-body jumbotron">
                    <h2 class="card-title text-center">Edit Settings</h2>
                    <form action="/dashboard/settings" method="post">
                        <div class="row">
                            <div class="col-12 col-md-8 offset-md-2">
                                <div class="form-group">
                                    <label for="background_color font-weight-bold">Background Color</label>
                                    <input type=" text" id="background_color" name="background_color"
                                        class="form-control @error('background_color') is-invalid @enderror"
                                        placeholder="#ffffff" value="{{ $user->background_color }}">

                                    @error('background_color')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-12 col-md-8 offset-md-2">
                                <div class="form-group">
                                    <label for="text_color">Text Color</label>
                                    <input type="text" class="form-control @error('text_color') is-invalid @enderror"
                                        id="text_color" name="text_color" placeholder="https://nahimudoy.netlify.app/"
                                        value="{{ $user->text_color }}">

                                    @error('text_color')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                        </div>

                        <div class="row ">
                            <div class="col-12 ml-1 text-center">
                                @csrf
                                <button type="submit"
                                    class=" btn btn-primary my-2 mr-3{{ session('success') ? ' is-valid' : '' }} ">Save</button>

                                <a href="/{{ $user->name }}" class="btn btn-success my-2 mr-3"> Profile</a>

                                @if (session('success'))
                                    <div class="valid-feedback">
                                        {{ session('success') }}
                                    </div>
                                @endif


                            </div>



                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
@endsection
