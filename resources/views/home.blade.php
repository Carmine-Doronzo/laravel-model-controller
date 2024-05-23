

@extends('layouts.app')

@section('name')
    <main>
        <div class="container" style="height: 100vh" style="overflow: scroll">
            <ul class="row gy-4 list-unstyled">
                @foreach ($movies as $movie)
                    
                
                <li class="col-3 flex-grow-1">
                    <div class="card h-100 d-flex align-items-center">
                        <img class="w-100 h-75" src="{{$image[($movie->id)-1]}}" alt="">
                        <h4>{{$movie->title}}</h4>
                        <p>{{$movie->nationality}}</p>
                        <p>{{$movie->date}}</p>
                        <p>{{$movie->vote}}</p>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </main>
@endsection