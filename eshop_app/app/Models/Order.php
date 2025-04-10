<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'state',
        'f_name',
        'l_name',
        'street',
        'house_num',
        'city',
        'country',
        'zip_code',
        'email',
        'phone_num',
        'payment',
        'shipment',
        'notes',
    ];

    /**
     * Define relationship: Order belongs to a User.
     */
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function products(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Product::class, 'order_id');
    }
}