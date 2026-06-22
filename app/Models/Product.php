<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Relations\HasMany;


class Product extends Model
{
    //

    protected $fillable = ['category_id', 'name', 'slug', 'description', 'price', 'stock', 'image', 'is_active'];

    public function category():BelongsTo{
        return $this->belongsTo(category::class);
    }

    public function cartItems():HasMany{
        return $this->hasMany(cartItem::class);
    }


     public function orderItems():HasMany{
        return $this->hasMany(orderItem::class);
    }

}
