<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{

    use HasFactory;

    protected $table = 'sale';

    protected $fillable = [
        'order_count'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
