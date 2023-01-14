@extends('main.layouts.layouts')

@section('content_main')

    <div class="ml-5">
        <div class="mt-lg-5">
            <a class="btn btn-info" href={{route('main.movie.create')}}> Cоздать</a>
        </div>

    @foreach($movies as $movies)
            <a href="{{route('main.movie.show', $movies->id)}}">  <p>{{$movies->id .') '. $movies->name}}</p> </a>
    @endforeach


    </div>



@endsection