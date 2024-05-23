

@extends('layouts.app')

@section('content')
    <main>
        <div class="container py-4"  style="overflow: scroll ; height: 100vh">
            <ul class="row gy-4 list-unstyled" >
                @foreach ($movies as $movie)
                    
                
                <li class="col-4 ">
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