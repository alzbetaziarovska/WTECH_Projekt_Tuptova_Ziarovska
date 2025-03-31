<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products'; // Explicitly defining table name (optional)
    
    protected $primaryKey = 'id'; // Primary key
    
    public $timestamps = false; // Set to true if you have `created_at` and `updated_at` columns
    
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'make',
        'stars',
        'on_sale',
        'in_stock',
        'new_in',
        'recommend',
        'favorite'
    ];
    
    protected $casts = [
        'on_sale' => 'boolean',
        'in_stock' => 'boolean',
        'new_in' => 'boolean',
        'recommend' => 'boolean',
        'favorite' => 'boolean',
        'stars' => 'decimal:1'
    ];

    /**
     * Relationship: A product belongs to a category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
