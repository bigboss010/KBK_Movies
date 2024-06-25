@extends('layout.main')

@section('content')

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route("edit-cast/" . $cast->id) }}" method="POST" class="m-3" enctype="multipart/form-data">
            <div class="form-group">
                <label for="file">Ảnh diễn viên:</label>
                <div class="text-center">
                    <img src="{{BASE_URL_IMG . $cast->image}}" alt="$cast->image" class="w-25">
                </div>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="name">Tên diễn viên:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$cast->name}}">
            </div>

            <br>
            <input class="btn btn-outline-success mr-2" type="submit" name="edit" value="SỬA">

            <a href="{{route("list-cast")}}"><button type="button" class="btn btn-info">Danh sách</button></a>
        </form>
    </div>
</div>

@endsection