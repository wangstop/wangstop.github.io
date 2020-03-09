<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function proucts()
    {
        $product = Products::all();

        return view('/admin/proucts/index');

    }
}
