@extends('main.layouts.layouts')

@section('content_main')

    <form method="post" action="{{route('main.movie.update', $movie->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="d-flex flex-row">
            <div class="col-7 mt-0 m-lg-5 ">
                <div class="card card-primary ">
                    <div class="card-header">
                        <h3 class="card-title">Редактируем {{$movie->title}}</h3>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название фильма</label>
                            <input type="text" name="name" class="form-control" value="{{$movie->name}}" placeholder="Введите название фильма">
                        </div>
                        <div>
                            @if($movie->published)
                                <p>  ФИЛЬМ опубликован!</p>
                            @else()
                                <p>Не опубликован ФИЛЬМ!</p>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-3 mt-2 " >
                <img class="img text-center" style="width: 140px; height: 240px;"
                     src="{{url('storage/' . $movie->poster_img )}}">
                <input type="file" name="poster_img" class=" btn btn-primary btn-block mt-3">
            </div>
        </div>

        <div class="card-footer flex-row ">
            <button type="submit" class="btn btn-primary">Обновить</button>
            <a class="btn btn-primary m-lg-2" href="{{ route('main.movie.show', $movie->id) }} "> Назад </a>
        </div>
    </form>

    <form action="{{route('main.movie.publish', $movie->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <button type="submit" class="btn-primary ml-3">
                Сменить статус публикации
            </button>
        </div>
    </form>
@endsection