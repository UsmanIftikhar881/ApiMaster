<?php

namespace App\Http\Controllers;

use App\Http\Resources\StockResource;
use App\Models\Product;

class StockController extends Controller
{

    public function __construct(){
        $this->middleware('auth:api')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        return StockResource::collection($product->stock);
    }
}
