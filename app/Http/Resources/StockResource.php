<?php

namespace App\Http\Resources;

use App\Models\Stock;
use Illuminate\Http\Resources\Json\JsonResource;

class StockResource extends JsonResource
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
            'size' => $this->size,
            'qty' => $this->qty,
            'created_at' => $this->created_at
        ];
    }
}
