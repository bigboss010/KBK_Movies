@extends('layout.main')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <div>
        <h1 class="h3 text-gray-800">Casts</h1>
        <p class="mb-4">
            Diễn viên đóng phim
            <a target="_blank" href="https://datatables.net">KBK Movie</a>.
        </p>
    </div>
</div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route("post-cast") }}" method="POST" class="m-3" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="file">Ảnh diễn viên:</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="name">Tên diễn viên:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>


                <br>
                <input class="btn btn-outline-success mr-2" type="submit" name="add" value="THÊM">

                <a href="{{route("list-cast")}}"><button type="button" class="btn btn-info">Danh sách</button></a>
            </form>
        </div>
    </div>

@endsection