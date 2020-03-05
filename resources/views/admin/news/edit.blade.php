@extends('/layouts/app');

@section('content')

<div class="container">

    <form method="POST" action="/admin/news/update/{{$news->id}}" enctype="multipart/form-data">

        <h1>編輯訊息</h1>

        @csrf
        <div class="form-group" >
          <label for="img">現有圖片</label>
        <img src="{{$news->img}}" alt="" srcset="" class="img-fluid" width="100px" >
        <input type="file" class="form-control" id="img" name="img" >
        </div>

        <div class="form-group">
            <label for="img">Image</label>

            @foreach ($news->img_data as $item)
            <img src="{{$item->img_url}}" alt="" class="img-fluid" width="100px">
            @endforeach


            <input type="file" class="form-control" id="multipleimg" name="multipleimg[]"  multiple>
          </div>



        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$news->title}}">
          </div>

          <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" id="content" name="content" value="{{$news->title}}">
          </div>

          <div class="form-group">
            <label for="sort">sort</label>
            <input type="number" class="form-control" id="sort" name="sort" value="{{$news->sort}}">
          </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

  </div>

@endsection
