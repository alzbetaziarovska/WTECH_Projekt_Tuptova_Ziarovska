<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductInCart extends Model
{

    protected $table = 'products_in_cart';

    protected $primaryKey = 'id';

    public $timestamps = false; // Disable timestamps since they are not in the table

    protected $fillable = [
        'cart_id',
        'product_id',
        'pcs'
    ];

    public function cart(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Cart::class, 'cart_id');
    }

    public function product(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}