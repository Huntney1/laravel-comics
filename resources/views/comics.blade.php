@extends('layout.app')

@section('main-content')
    <div class="jumbotron">
    </div>
    <section class="current-series">
        <div class="container">
            <div class="row">
                <h4 class="series-title"> CURRENT SERIES </h4>
                @foreach ($cards => $key as $card)
                    <div class="col-6 col-md-3 col-lg-2">
                        <a href="{{route('detail-comics', ['titolo' => card ['titolo']])}}" class="w-100">
                            <div class="my-card">
                                <img src="{{ $card['thumb'] }}" alt="{{ $card['title'] }}" class="img-fluid">
                                <p class="text-white"> {{ $card['title'] }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <a href="#"> LOAD MORE </a>
        </div>
    </section>
@endsection
