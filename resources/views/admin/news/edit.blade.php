@extends('/layouts/app');

@section('content')

<div class="container">

    <form method="POST" action="/admin/news/update/{{$news->id}}">

        <h1>編輯訊息</h1>

        @csrf
        <div class="form-group">
          <label for="img">Image</label>
        <input type="text" class="form-control" id="img" name="img" value="{{$news->img}}">
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$news->title}}">
          </div>
          <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" id="content" name="content" value="{{$news->title}}">
          </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

  </div>

@endsection
