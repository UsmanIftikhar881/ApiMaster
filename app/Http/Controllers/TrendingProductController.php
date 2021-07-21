<?php

namespace App\Http\Controllers;

use App\Http\Resources\Product\TrendingProductCollection;
use App\Models\Sale;
use App\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductRequest;
use App\Exceptions\ProductNotBelongsToUser;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\Product\ProductResource;
use App\Http\Resources\Product\ProductCollection;

class TrendingProductController extends Controller
{

    public function __construct(){
        $this->middleware('auth:api')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TrendingProductCollection::collection(Product::join('sale', 'sale.product_id', 'products.id')->where('sale.order_count', '>',  1)->get());
    }
}
