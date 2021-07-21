<?php

namespace App\Models;

use App\Models\ProductCategory;
use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = ['name','image','detail','stock','discount','price'];

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function product_category(){
        return $this->belongsTo(ProductCategory::class);
    }
}
