<?php

namespace App\Http\Controllers;

use App\Products;
use App\ProductTypes;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function products()
    {
        $product = Products::all();

        return view('/admin/products/index',compact('product'));

    }

    public function create()
    {
        $product_type = ProductTypes::all();



        return view('/admin/products/create',compact('product_type'));
    }

    public function edit($id)
    {
        // 呼叫需要修改指定的那筆資料
        // 呼叫需要修改指定
        // $news = News::with('img_data')->find($id);



        // 回傳資料
        // dd($news);
        return view('/admin/products/edit');
        // compactv攜帶news到(admin/news/edit)網址
    }



    public function store(Request $request)
    {

        // all()是取出title content img multipleimg
        $news_data = $request->all();
        // dd($request);

        // dd( $news_data);
        // $file_name指向封包圖片
        // $file_name = $request->file('img')->store('','public');
        // dd($file_name);
        // $file_name覆蓋 $news_data的圖片
        // $news_data['img'] = $file_name;

        // 檢查是否有檔案
        if ($request->hasFile('img')) {

            $file = $request->file('img');

            // dd( $file);
            // product上傳資料夾名稱
            $path = $this->fileUpload($file, 'product');


            $news_data['img'] = $path;
        }

        $new = Products::create($news_data);

        if ($request->hasFile('multipleimg')) {
            $files = $request->file('multipleimg');

            foreach ($files as $file) {

                //上傳圖片
                $path = $this->fileUpload($file, 'product');
                //新增資料進DB
                //  $XXX = new ABC  這個變數"使用"ABC model
                $images = new News_img;
                $images->img_url = $path;
                $images->newid = $new->id;

                $images->save();

            }
        }


        return redirect('/home/products');
    }


    private function fileUpload($file, $dir)
    {
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if (!is_dir('upload/')) {
            mkdir('upload/');
        }
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if (!is_dir('upload/' . $dir)) {
            mkdir('upload/' . $dir);
        }
        //取得檔案的副檔名
        $extension = $file->getClientOriginalExtension();
        //檔案名稱會被重新命名
        $filename = strval(time() . md5(rand(100, 200))) . '.' . $extension;
        //移動到指定路徑
        move_uploaded_file($file, public_path() . '/upload/' . $dir . '/' . $filename);
        //回傳 資料庫儲存用的路徑格式
        return '/upload/' . $dir . '/' . $filename;
    }
}
