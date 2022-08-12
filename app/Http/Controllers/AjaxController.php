<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->post('search');
        $products = Product::where('name', 'like', "%{$search}%")->limit(10)->get();
        if (count($products) === 0) {
            $products = Product::where('code', 'like', "%{$search}%")->limit(10)->get();
        }
        $productsCount = Product::where('name', 'like', "%{$search}%")->count();

        foreach ($products as $product) {
            $product->measures = unserialize($product->measures);
            $product->prices = unserialize($product->prices);
            $product->properties = unserialize($product->properties);

            switch ($product->status) {
                case 'IN_STOCK':
                    $product->status = "В наличии";
                    break;
                case 'PENDING':
                    $product->status = "Ожидается";
                    break;
                case 'NOT_AVAILABLE':
                    $product->status = "Нет на складе";
                    break;
                case 'ON_ORDER':
                    $product->status = "Под заказ";
                    break;
                default :
                    $product->status = "";
                    break;
            }
        }

        return response()->json(array('products'=> $products,'productsCount' => $productsCount, 'search' => $search),200);
    }
}
