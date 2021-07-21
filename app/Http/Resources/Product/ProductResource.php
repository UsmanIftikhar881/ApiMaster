<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'image' => $this->image,
            'rent' => $this->rent,
            'refundable_amount' => $this->refundable_amount,
            'stock' => $this->stock > 0 ? ($this->stock) : "Out of stock",
            'rating' => $this->reviews->count() > 0 ? (round($this->reviews->sum('star')/$this->reviews->count(),2)) : "No rating yet",
            'href' => [
                'reviews' => route('reviews.index', $this->id),
                'stock' => route('stock.index', $this->id)
            ],

        ];
    }
}
