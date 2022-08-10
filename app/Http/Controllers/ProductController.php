<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;



class ProductController extends Controller
{
    public function index()
    {
        //$products = DB::table('products')->whereNotNull('image')->get();
        $products = Product::whereNotNull('set_id')->paginate(12);
       // $products = DB::table('products')->whereNull('set_id')->get();
       //dd($products);

        return view('product',['products' => $products]);
    }


}
