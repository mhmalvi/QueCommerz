<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ProductImage extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $hidden = ["id", "product_id"];

    public function getImageAttribute($value)
    {
        return Storage::disk('ftp')->url("gallary/{$value}");
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
