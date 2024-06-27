@extends('layout.main')

@section('content')

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route("post-movie") }}" method="POST" class="m-3" enctype="multipart/form-data">
               
                <div class="form-group">
                    <label for="name">Tên Phim:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="form-group">
                    <label for="name">Poster:</label>
                    <input type="file" class="form-control-file" id="poster" name="poster">
                </div>

                <div class="form-group">
                    <label for="name">Ảnh diễn viên:</label>
                    <input type="file" class="form-control-file" id="avatar" name="avatar">
                </div>

                <div class="form-group">
                    <label for="text">Đạo diễn:</label>
                    <input type="text" class="form-control-file" id="director" name="director">
                </div>

                <div class="form-group">
                    <label for="text">Thời lượng phim:</label>
                    <input type="text" class="form-control-file" id="duration" name="duration">
                </div>

                <div class="form-group">
                    <label for="date">Ngày phát hành:</label>
                    <input type="date" class="form-control-file" id="release_date" name="release_date">
                </div>

                <div class="form-group">
                    <label for="text">Mô tả:</label>
                    <input type="text" class="form-control-file" id="description" name="description">
                </div>

                <div class="form-group">
                    <label for="text">Trailer Video:</label>
                    <input type="text" class="form-control-file" id="trailer_url" name="trailer_url">
                </div>

                {{-- <div class="form-group">
                    <label for="date">Ngày tạo:</label>
                    <input type="date" class="form-control-file" id="created_at" name="created_at">
                </div>

                <div class="form-group">
                    <label for="date">Ngày cập nhật:</label>
                    <input type="date" class="form-control-file" id="updated_at" name="updated_at">
                </div> --}}

                <br>
                <input class="btn btn-outline-success mr-2" type="submit" name="add" value="THÊM">

                <a href="{{route("list-movie")}}"><button type="button" class="btn btn-info">Danh sách</button></a>
            </form>
        </div>
    </div>

@endsection