<?php

namespace App\Http\Controllers;
use App\Products;
use App\ProductTypes;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductTypeController extends Controller
{

    public function index()
    {
        $products = ProductTypes::all();

        return view('/admin/product_type/index',compact('products'));

    }

    public function create()
    {
        // $product = ProductTypes::all();

        return view('/admin/product_type/create');

    }



    public function store(Request $request)
    {

        $product_data = $request->all();


        $product = ProductTypes::create($product_data);
        $product->save();


        return redirect('/home/product_types');
    }

    public function update(Request $request, $id)
    {


        ProductTypes::find($id)->update($request->all());

        $old_products = ProductTypes::find($id);
        // dd( $old_news);
        $requsetData = $request->all();

        // dd($requsetData);

        // 當收到內文照片時， 將照片存回資料庫
        // if ($request->hasFile('multipleimg')) {
        //     $files = $request->file('multipleimg');
        //     // dd($files);

        //     foreach ($files as $file) {

        //         //上傳圖片
        //         $path = $this->fileUpload($file, 'news');
        //         // dd($path);
        //         //新增資料進DB

        //         // 用$images代表使用 News_img這個model
        //         $images = new News_img;
        //         // dd($images);
        //         $images->img_url = $path;
        //         $images->newid =  $old_news['id'];
        //         $images->save();

        //         // $product_img = new ProductImg;
        //         // $product_img->product_id = $new_product_id;
        //         // $product_img->img = $path;
        //         // $product_img->save();

        //         // view:顯示畫面 controller model
        //     }
        // }

        // 檢查是否有上傳主要圖片
        // if ($request->hasFile('img')) {
        //     $old_image = $old_products->img;
        //     // 把新存的檔案路近 存進file      file()顯示檔案資訊
        //     $file = $request->file('img');
        //     // dd($file);
        //     //             fileUploda('新存檔案路徑',' 資料夾名稱')
        //     $path = $this->fileUpload($file, 'news');
        //     $requsetData['img'] = $path;
        //     File::delete(public_path() . $old_image);

        //     $old_products->img =   $requsetData['img'];
        //     $old_products->title =  $requsetData['title'];
        //     $old_products->content =  $requsetData['content'];
        //     $old_products->sort =  $requsetData['sort'];
        //     $old_products->save();
        // }

        // 更新資料  :先把舊資料拿出來 再把新資料塞進去
        // $old_news->update($requsetData);一次完成版




        return redirect('/home/product_types');
    }

    public function edit($id)
    {
        // 呼叫需要修改指定的那筆資料
        // 呼叫需要修改指定
        $prducts = ProductTypes::with('product')->find($id);



        // 回傳資料
        // dd($news);
        return view('/admin/product_type/edit');
        // compact攜帶news到(admin/news/edit)網址
    }


    public function delete(Request $request, $id)
    {


        $products = ProductTypes::find($id);
        $products->delete();

        //   dd($news);
        // $old_img = $news['img'];

        // // 先刪除laravel裡面圖片的資料
        // File::delete(public_path() . $old_img);

        // // 再刪除資料庫的資料

        // // 找到News的id並對News_img的id做刪除

        // // 獲得News_img符合id的newid欄位
        // $items = News_img::where('newid', $id)->get();

        // // dd($items);


        // foreach ($items as $item) {

        //     $old_item = $item->img_url;
        //     // dd($old_item);
        //     File::delete(public_path() . $old_item);
        //     $item->delete();
        // }






        return redirect('home/product_types');
    }


}
