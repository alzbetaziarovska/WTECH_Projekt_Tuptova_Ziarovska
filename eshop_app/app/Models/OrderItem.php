<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductInOrder extends Model
{

    protected $table = 'order_items';

    protected $primaryKey = 'id';

    public $timestamps = false; // Disable timestamps since they are not in the table

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity'
    ];

    public function order(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function product(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}