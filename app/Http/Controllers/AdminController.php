<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function index() {
        return view('admin.dashboard');
    }

    public function dashboard() {
        return view('admin.dashboard');
    }

    public function products() {

        $products = DB::table('products')->orderBy('id')->paginate(10);
       // $products = Product::select('*')->orderBy('id')->all();
//dd($products);
        return view('admin.product', ['products' => $products]);
    }
}
