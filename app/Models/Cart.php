<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cart extends Model
{
    //
    protected $fillable =  ['user_id'];

    // this cart belongs to thsi user
    public function user():BelongsTo{

       return $this->belongsTo(User::class);
    }
    //this cart has many items
    public function item():HasMany{
        return $this->hasMany(CartItem::class);
    }
}
