@extends('layout.main')

@php
    $cards = config('comics');

@endphp

@section('content')

<main>

    <div class="jumbotron">
        <img src="/img/jumbotron.jpg" alt="">
    </div>

    <div class="content">
        <div class="dc-container">
            <span class="series">Current series</span>
            <div class="card-container">
               @foreach ( $cards as $card)
                <div class="card">
                    <div class="img-container">
                        <img src="{{$card['thumb']}}" alt="">
                    </div>
                    <span>{{$card['series']}}</span>
                </div>
            @endforeach
               <button type="button">Load More</button>
           </div>
        </div>
    </div>


</main>

@endsection
