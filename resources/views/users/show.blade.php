@extends('layouts.links')

@section('content')

    <div class="container pt-3">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                @foreach ($user->links as $link)
                    <div class="link">
                        <a href="{{ $link->link }}" data-link-id="{{ $link->id }}"
                            class="user-link d-block p-4 mb-4 rounded h2 text-center text-decoration-none" target="_blank"
                            rel="nofollow"
                            style="border:2px solid {{ $user->text_color }}; color:{{ $user->text_color }};">{{ $link->name }}</a>
                    </div>
                @endforeach


                <div class="row ">
                    <div class="col-12 ml-1 text-center">
                        <a href="/dashboard/links/new">
                            <button type="submit" class=" btn btn-primary my-2 mr-3 ">Create New</button></a>

                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
