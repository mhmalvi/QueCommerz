<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['order_date'];

    public function details()
    {
        return $this->hasMany(OrderDetails::class);
    }

    public function shipment()
    {
        return $this->belongsTo(Shipment::class);
    }

    public function getOrderDateAttribute()
    {
        return $this->created_at->format('M j, Y'); // Aug 30, 2022
    }
}
