@extends('layouts.app')

@section('name')
    <main>
        <div class="container">
            <div class="row gy-4">
                @foreach ($movies as $movie)
                    
                
                <div class="col-3">
                    <div class="card h-100 d-flex align-items-center">
                        <h4>{{$movie->title}}</h4>
                        <p>{{$movie->nationality}}</p>
                        <p>{{$movie->date}}</p>
                        <p>{{$movie->vote}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection