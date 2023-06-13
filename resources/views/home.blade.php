@extends('layout.main')

@php
    $cards = config('comics');

@endphp

@section('content')

<main class="container my-5">

    <h1 class="my-5">Elenco Fumetti</h1>

    <table class="table border-1 border">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Serie</th>
                <th scope="col">Data</th>
                <th scope="col">Tipologia</th>
            </tr>
        </thead>
            @foreach ($cards as $card )
            <tbody>
            <tr>
                <th>{{$card['title']}}</th>
                <td>{{$card['price']}}</td>
                <td>{{$card['series']}}</td>
                <td>{{$card['sale_date']}}</td>
                <td>{{$card['type']}}</td>
            </tr>
            </tbody>
            @endforeach
      </table>

</main>

@endsection
