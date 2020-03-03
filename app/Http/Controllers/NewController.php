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
        News::create($news_data)->save();
        return redirect('/home/news');

    }


    public function create(){
        return view('/admin/news/create');
    }



    public function edit($id){

        $news = News::find($id);

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
         News::find($id)->update($request->all());

        return redirect('/home/news');

        // redirect跑完之後回到首頁(home/news)

    }

    public function delete(Request $request,$id){

        News::find($id)->delete();
        return redirect('/home/news');

    }

}
