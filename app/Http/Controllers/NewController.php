<?php

namespace App\Http\Controllers;

use App\News;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index(){

        $all_news = News::all();
        // dd($all_news);
        return view('/admin/news/index',compact('all_news'));

    }


    public function store(Request $request){

        $news_data=$request->all();
        // dd( $news_data);
        // $file_name指向封包圖片
        // $file_name = $request->file('img')->store('','public');
        // dd($file_name);
        // $file_name覆蓋 $news_data的圖片
        // $news_data['img'] = $file_name;

        // 檢查是否有檔案
        if($request->hasFile('img')) {
            $file = $request->file('img');
            $path = $this->fileUpload($file,'product');
            $news_data['img'] = $path;
        }



        News::create($news_data)->save();




        return redirect('/home/news');

    }


    public function create(){
        return view('/admin/news/create');
    }



    public function edit($id){

        // $news = News::find($id);



        return view('/admin/news/edit',compact('news'));
        // compactv攜帶news到(admin/news/edit)網址
    }


    // $request提交的所有資料
    public function update(Request $request,$id){
        // dd($request);
        // 方法一
        // find($id)找到id的資料
        // $news = News::find($id);

        // 針對單筆資料進行附值
        // $news->img = $request->img;
        // $news->title = $request->title;
        // $news->content = $request->content;
        // 儲存
        // $news->save();

        // 方法二
        //  News::find($id)->update($request->all());

        if($request->hasFile('img')) {
            // 上傳新圖片
            $old_image = $item->img;
            File::delete(public_path().$old_image);

            // 刪除就圖片
            $file = $request->file('img');
            $path = $this->fileUpload($file,'product');
            $requsetData['img'] = $path;
        }
        return redirect('/home/news');

        // redirect跑完之後回到首頁(home/news)

    }

    public function delete(Request $request,$id){

        News::find($id)->delete();
        return redirect('/home/news');

    }

    private function fileUpload($file,$dir){
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if( ! is_dir('upload/')){
            mkdir('upload/');
        }
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if ( ! is_dir('upload/'.$dir)) {
            mkdir('upload/'.$dir);
        }
        //取得檔案的副檔名
        $extension = $file->getClientOriginalExtension();
        //檔案名稱會被重新命名
        $filename = strval(time().md5(rand(100, 200))).'.'.$extension;
        //移動到指定路徑
        move_uploaded_file($file, public_path().'/upload/'.$dir.'/'.$filename);
        //回傳 資料庫儲存用的路徑格式
        return '/upload/'.$dir.'/'.$filename;
    }

}
