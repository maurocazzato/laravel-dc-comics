@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <div class="container mt-5">
        <div class="row">
            <ul class="d-flex list-unstyled flex-wrap">
                @foreach ($comics as $comic)
                    <li class=" flex-column col-2">
                        <a href="/comic" class="text-decoration-none">
                            <img src="{{ $comic['thumb'] }}" width="100px">
                            <span class="small-font">
                                {{ $comic['title'] }}
                            </span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
