<?php

namespace App\Http\Controllers;
use App\ProductTypes;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{

    // 產品類別管理
    public function product_types()
    {
        $product = ProductTypes::all();

        return view('/admin/product_type/index');

    }

    public function create()
    {
        $product = ProductTypes::all();

        return view('/admin/product_type/create');

    }



    public function store1(Request $request)
    {

        // all()是取出title content img multipleimg
        $product_data = $request->all();
        // dd($request);

        // dd( $news_data);
        // $file_name指向封包圖片
        // $file_name = $request->file('img')->store('','public');
        // dd($file_name);
        // $file_name覆蓋 $news_data的圖片
        // $news_data['img'] = $file_name;

        // 檢查是否有檔案
        // if ($request->hasFile('img')) {

        //     $file = $request->file('img');

        //     // dd( $file);
        //     // product上傳資料夾名稱
        //     $path = $this->fileUpload($file, 'product');


        //     $product_data['img'] = $path;
        // }

        $new = ProductTypes::create($product_data);

        // if ($request->hasFile('multipleimg')) {
        //     $files = $request->file('multipleimg');

        //     foreach ($files as $file) {

        //         //上傳圖片
        //         $path = $this->fileUpload($file, 'product');
        //         //新增資料進DB
        //         //  $XXX = new ABC  這個變數"使用"ABC model
        //         $images = new News_img;
        //         $images->img_url = $path;
        //         $images->newid = $new->id;

        //         $images->save();

        //         // $product_img = new ProductImg;
        //         // $product_img->product_id = $new_product_id;
        //         // $product_img->img = $path;
        //         // $product_img->save();
        //     }
        // }



        // 把NEWS的ID取得 使用foreach 判斷要存幾張圖片 再把newid存成NES的ID




        // if($request->hasFile('multipleimg'))
        // {
        //     $files = $request->file('multipleimg');

        //     foreach ($files as $file) {
        //         //上傳圖片
        //         $path = $this->fileUpload($file,'product_imgs');
        //         //新增資料進DB
        //         $product_img = new News_img;
        //         $product_img->product_id = $new_product_id;
        //         $product_img->img = $path;
        //         $product_img->save();
        //     }
        // }


        return redirect('/home/product');
    }




}
