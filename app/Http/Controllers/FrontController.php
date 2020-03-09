<?php

namespace App\Http\Controllers;

// 匯入資料庫
use DB;

use App\News;
use App\News_img;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front/index');
    }





    public function news_inner($id){

        // 方法一
        // $img = News::find($id)->img_data;
        // dd($img);

        // 方法二
        // $img = News::with('img_data')->find($id);
        $items = News_img::where('newid', $id)->get();

//  dd($items);

        return view('front/news_inner',compact('items'));
    }

    public function news(){

        // 取得資料庫的東西(news)
        // orderBy('sort','desc')根據sort去做排序
        $news_data = DB::table('news')->orderBy('sort','desc')->get();

        return view('front/news',compact('news_data'));
    }


    public function proucts(){

        $product_data = DB::table('products')->orderBy('sort','desc')->get();

        return view('front/product');
    }

}
