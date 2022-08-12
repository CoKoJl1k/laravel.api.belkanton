<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //

    public function index(Request $request)
    {
        $search = $request->get('search');
        $products = Product::where('name', 'like', "%{$search}%")->paginate(12);

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

        return view('product',['products' => $products, 'search' => $search]);
    }
}
