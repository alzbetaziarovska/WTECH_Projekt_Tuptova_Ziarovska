<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    protected $table = 'carts'; // Define the table name (optional)

    protected $primaryKey = 'id'; // Define the primary key (optional)

    protected $fillable = [
        'user_id',
    ];

    /**
     * Define relationship: A Cart belongs to a User.
     */
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function productsInCart(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(CartItem::class, 'cart_id');
    }
}