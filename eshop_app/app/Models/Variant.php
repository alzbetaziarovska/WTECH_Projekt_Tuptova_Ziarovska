<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    // Define the table name if it doesn't follow Laravel's naming convention
    protected $table = 'variants';

    // Define the primary key if it's not 'id'
    protected $primaryKey = 'id';

    // Disable the timestamps if not using created_at/updated_at columns
    public $timestamps = false;

    // Fillable attributes for mass assignment
    protected $fillable = [
        'product_id', 
        'variant_type', 
        'variant', 
        'in_storage', 
        'price'
    ];

    // Define relationships if needed
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
