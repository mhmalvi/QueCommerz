<?php

namespace App\Http\Resources;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->map(function ($res) {
                return [
                    'id' => $res->uuid,
                    'title' => $res->product,
                    'regular_price' => "\${$res->price}",
                    'discounted_price' => $res->discount > 0 ? $res->discounted() : 0,
                    'discount' => $res->discount(),
                    'thumbnail' => Storage::disk('ftp')->url("thumbnails/{$res->thumbnail}"),
                ];
            })
        ];
    }
}
