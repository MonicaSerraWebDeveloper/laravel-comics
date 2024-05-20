@extends('layouts.app')

@section('content')
    <div class="container-bg">
        <div class="container-ms">
            <div class="row-ms">
                @foreach ($comics as $comic)
                    <div class="comic-card">
                        <img src="{{ $comic['thumb'] }}" alt="">
                        <h4 class="title-h4">{{ $comic['series'] }}</h4>
                    </div>
                @endforeach
                <button class="secondary-button">Load More</button>
            </div>
        </div>
    </div>
@endsection