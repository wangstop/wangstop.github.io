<?php

namespace App\Http\Controllers;

// 匯入資料庫
use DB;

use App\News;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front/index');
    }

    public function product(){
        return view('front/product');
    }


    public function news_inner($id){

        // 方法一
        // $img = News::find($id)->img_data;
        // dd($img);

        // 方法二
        $img = News::with('img_data')->find($id);
        // dd($img);

        return view('front/news_inner',compact('img'));
    }

    public function news(){

        // 取得資料庫的東西(news)
        // orderBy('sort','desc')根據sort去做排序
        $news_data = DB::table('news')->orderBy('sort','desc')->get();
        return view('front/news',compact('news_data'));
    }


}
