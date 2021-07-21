<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class TrendingProductCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
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
            'rating' => $this->reviews->count() > 0 ? (round($this->reviews->sum('star')/$this->reviews->count(),2)) : "No rating yet",
            'href' => [
                'link' => route('products.show', $this->id)
            ]
        ];
    }
}
