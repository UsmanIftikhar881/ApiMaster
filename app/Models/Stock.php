<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $table = 'stock';

    protected $fillable = ['size','qty'];

    public $tenure = array(1,2,3,4,5); //I can do this with eav attributes but due to eid and busy routine I'm using static values

    protected $casts = [
        'size' => 'array'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
