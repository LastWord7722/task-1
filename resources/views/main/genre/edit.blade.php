@extends('main.layouts.layouts')

@section('content_main')

    <form method="post" action="{{route('main.genre.update', $genre->id)}}">
        @csrf
        @method('PATCH')
        <div class="d-flex flex-row">
            <div class="col-7 mt-0 m-lg-5 ">
                <div class="card card-primary ">
                    <div class="card-header">
                        <h3 class="card-title">Редактируем {{$genre->title}}</h3>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название жанра</label>
                            <input type="text" name="title" class="form-control" value="{{$genre->title}}" placeholder="Введите название бренда">
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="card-footer flex-row ">
            <button type="submit" class="btn btn-primary">Обновить</button>
            <a class="btn btn-info m-lg-2" href="{{ route('main.genre.show', $genre->id) }} "> Назад </a>
        </div>
    </form>

@endsection