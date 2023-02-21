@extends('layout.app')

@section('main-content')
    <div class="jumbotron"></div>
    <div class="bg-blue"></div>

    <div class="body_sing">

        <div class="container">
            <div class="img_cont">
                <img src="{{ $single['thumb'] }}" alt="img-sing">
                <p>{{ $single['type'] }}</p>
            </div>

        </div>

        <div class="container d-flex">
            <div class="row">
                <div>
                    <h1 class="title">{{ $single['title'] }}</h1>
                </div>
            </div>
        </div>
    </div>


@endsection
