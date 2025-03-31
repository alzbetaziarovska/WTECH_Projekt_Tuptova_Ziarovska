<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    // Define the table name if it doesn't follow Laravel's naming convention
    protected $table = 'reviews';

    // Define the primary key if it's not 'id'
    protected $primaryKey = 'id';

    // Disable the timestamps if not using created_at/updated_at columns
    public $timestamps = false;

    // Fillable attributes for mass assignment
    protected $fillable = [
        'product_id', 
        'user_id', 
        'text', 
        'stars', 
        'date'
    ];

    // Define relationships if needed
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
