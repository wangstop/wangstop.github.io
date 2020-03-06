@extends('/layouts/app');

@section('css')

<style>

.box{
    position: absolute;
    right: 0px;
    top: 0px;
}

</style>

@endsection


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

            <label for="img">多張圖片修改</label>
            <input type="file" class="form-control" id="multipleimg" name="multipleimg[]"  multiple>

            <div class="row ">


                        @foreach ($news->img_data as $item)

                        {{-- datanewingid自己設定的id --}}
                         <div class="col-2 " datanewingid="{{$item->id}}">
                            <div class="card-img " >
                            <button type="button" class="box btn btn-danger" datanewingid="{{$item->id}}">X</button>

                            <img src="{{$item->img_url}}" alt="" class="img-fluid" width="100%">
                            <input type="text" class="form-control " id="sort" name="sort" value="{{ $item->sort}}">
                             </div>
                         </div>

                        @endforeach
              </div>
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


@section('js')
<script>

            // 表單認證
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $('.card-img .btn-danger').click(function(){

            // 點擊的id
            var nameid=this.getAttribute('datanewingid');


            jQuery.ajax({

                // 送出的路徑
                  url: "/admin/news/ajax",
                //   方法 預設get
                  method: 'post',

                //  點擊抓到的id
                  data: {
                    nameid:nameid,
                  },

                  success: function(result){
                    $(`.col-2[datanewingid=${nameid}]`).remove();

                    // console.log(result);

                  }});

            });




</script>

@endsection
