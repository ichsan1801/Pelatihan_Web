<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\Product;

class FrontController extends Controller
{
    public static function getIndex() {
        $data['products'] = Product::getAll();

        return view('front.index',$data);
    }
}
