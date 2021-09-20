<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $hidden = ['id'];

    public function getThumbnailAttribute($value)
    {
        return Storage::disk('ftp')->url("thumbnails/{$value}");
    }

    public function discount()
    {
        if ($this->discount_type == 'flat' && $this->discount > 0) {
            return "\${$this->discount}";
        } elseif ($this->discount_type == 'percent' && $this->discount > 0) {
            return "{$this->discount}%";
        } else {
            return null;
        }
    }

    public function discounted()
    {
        if ($this->discount_type == 'flat' && $this->discount > 0) {
            return number_format($this->price - $this->discount, 2, '.', ',');
        } elseif ($this->discount_type == 'percent' && $this->discount > 0) {
            return number_format(($this->price - (($this->price * $this->discount) / 100)), 2, '.', ',');
        } else {
            return 0;
        }
    }
}
