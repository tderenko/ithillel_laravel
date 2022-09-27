<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'record');
    }

    public function orders()
    {
        return $this
            ->belongsToMany(Order::class, 'order_product', 'order_id', 'product_id')
            ->withPivot(['qunatity', 'single_price']);
    }
}
