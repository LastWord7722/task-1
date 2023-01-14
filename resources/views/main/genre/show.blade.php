@extends('main.layouts.layouts')

@section('content_main')
    <div class="card-body table-responsive mt-lg-5">
        <table  class="table table-hover text-nowrap ">
            <thead >
                <tr>
                    <th> Уникальный номер</th>
                    <th> Название бренда</th>
                    <th> Фото</th>
                </tr>
            </thead>

        <tbody>
            <tr>
                <td>#{{$genre->id}}</td>
                <td>{{$genre->title}}</td>

            </tr>
        </tbody>
        </table>
    </div>

    <div class="mt-3 " >
            <div class="d-flex flex-row">
                <a class="btn btn-info m-lg-1"  href="{{route('main.genre.edit', $genre->id)}}"> Редактировать </a>
                <a class="btn btn-info m-lg-1" href="{{ route('main.genre.index')}}"> Назад </a>
                <div class="m-lg-1" >
                    <form method="post" action="{{route('main.genre.destroy', $genre->id)}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </div>
            </div>
    </div>
@endsection