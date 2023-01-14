@extends('main.layouts.layouts')

@section('content_main')
    <div class="card-body table-responsive mt-lg-5">
        <table  class="table table-hover text-nowrap ">
            <thead >
                <tr>
                    <th> Уникальный номер</th>
                    <th> Статус публикации</th>
                    <th> Название фильма</th>
                    <th> Постер</th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <td>#{{$movie->id}}</td>
                <td>{{$movie->published}}</td>
                <td>{{$movie->name}}</td>


                <td> <img alt="Постер не добавлин" src="{{url('storage/'.$movie->poster_img)}}"> </td>
            </tr>
        </tbody>
        </table>
    </div>

    <div class="mt-3 " >
            <div class="d-flex flex-row">
                <a class="btn btn-info m-lg-1"  href="{{route('main.movie.edit', $movie->id)}}"> Редактировать </a>
                <a class="btn btn-info m-lg-1" href="{{ route('main.movie.index')}}"> Назад </a>
                <div class="m-lg-1" >
                    <form method="post" action="{{route('main.movie.destroy', $movie->id)}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </div>
            </div>
    </div>
@endsection