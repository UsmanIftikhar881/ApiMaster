<?php

namespace App\Http\Controllers;

use App\Http\Resources\Product\SearchProductCollection;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchProductController extends Controller
{

    public function __construct(){
        $this->middleware('auth:api')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return SearchProductCollection::collection( Product::where('name', 'LIKE','%'.$request->s.'%')->select('id', 'name')->get());
    }
}
