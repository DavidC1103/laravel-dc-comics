@extends('layout.main')



@section('content')
<div class="container my-5">

    <h1>Elenco Fumetti</h1>

    <table class="table border-1 border">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Serie</th>
                <th scope="col">Data</th>
                <th scope="col">Tipologia</th>
                <th scope="col">Dettagli</th>
            </tr>
        </thead>
            @foreach ($movies as $movie )
            <tbody>
            <tr>
                <th>{{$movie['title']}}</th>
                <td>{{$movie['price']}}</td>
                <td>{{$movie['series']}}</td>
                <td>{{$movie['sale_date']}}</td>
                <td>{{$movie['type']}}</td>
                <td><a class="btn btn-primary" href="{{ route('movies.show' , $movie) }}"><i class="fa-brands fa-golang text-white fs-5"></i></a></td>
            </tr>
            </tbody>
            @endforeach
      </table>
</div>
@endsection

