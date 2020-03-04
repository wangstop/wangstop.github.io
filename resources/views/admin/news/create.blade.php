@extends('/layouts/app');

@section('content')

<div class="container">
    
    {{-- enctype="multipart/form-data"上傳檔案 --}}

    <form method="POST" action="/home/news/store"  enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="img">Image</label>
          <input type="file" class="form-control" id="img" name="img">
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
          </div>

          <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" id="content" name="content">
          </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

  </div>

@endsection
