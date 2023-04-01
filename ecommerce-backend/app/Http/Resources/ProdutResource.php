<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProdutResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
       return [
        'id' => $this->id,
        'name' => $this->name,
        'price' => $this->price,
        'description' => $this->description,
        'category' => $this->category->name,
        'inventory' => StockResource::collection($this->stocks),
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
       ];
    }
}
