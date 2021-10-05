<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class OrdersCollection extends ResourceCollection
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
            'data' => $this->collection->map(function($res)
            {
                return [
                    'order_no' => $res->order_no,
                    'payment_status' => $res->payment_status,
                    'order_status' => $res->order_status,
                    'cart' => json_decode($res->cart, true),
                    'order_date' => $res->order_date,
                ];
            })
        ];
    }
}
