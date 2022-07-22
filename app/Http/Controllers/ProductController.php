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
        return view('product');
    }


}
