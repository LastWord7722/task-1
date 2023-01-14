@extends('main.layouts.layouts')

@section('content_main')

    <div class="ml-5">

    @foreach($genres as $genre)
            <a href="{{route('main.genre.show', $genre->id)}}">  <p>{{$genre->id .') '. $genre->title}}</p> </a>
    @endforeach


    </div>

    <div class="m-lg-5">
        <a class="btn btn-info" href={{route('main.genre.create')}}> Cоздать</a>
    </div>


@endsection