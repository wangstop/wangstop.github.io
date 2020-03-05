@extends('/layouts/app');

@section('content')

<div class="container">

    {{-- enctype="multipart/form-data"一種編碼方式for img --}}

    <form method="POST" action="/home/news/store"  enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="img">單張圖片上傳</label>
          <input type="file" class="form-control" id="img" name="img" required>
        </div>

        <div class="form-group">
            <label for="multipleimg">多張圖片上傳</label>
            <input type="file" class="form-control" id="multipleimg" name="multipleimg[]" required multiple>
          </div>

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
          </div>

          <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" id="content" name="content" required>
          </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

  </div>

@endsection
