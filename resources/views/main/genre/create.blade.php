@extends('main.layouts.layouts')
@section('content_main')

    <form  action="{{route('main.genre.store')}}" method="post" enctype="multipart/form-data" >
        @csrf
        @method('POST')
        <div class="col-md-5 mt-0 m-lg-5">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Добавление жанра</h3>
                </div>
                <div class="card-body">
                    <label> Название жанра</label>
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Введите название бренда">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cоздать</button>
        </div>
    </form>

@endsection