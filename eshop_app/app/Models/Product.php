<?php

namespace App\Models;

use App\Review;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'maker',
        'stars',
        'in_storage',
        'new_in',
        'recommend',
        'favorite',
        'category',
        'sale'
    ];

    protected $casts = [
        'on_sale' => 'boolean',
        'new_in' => 'boolean',
        'recommend' => 'boolean',
        'favorite' => 'boolean',
        'stars' => 'decimal:1'
    ];
    /**
     * @var mixed
     */

    public function variants(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Variant::class, 'product_id');
    }

    public function reviews(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Review::class, 'product_id');
    }

    public function salePrice(): float
    {
        return round($this->price * (1 - $this->sale), 2);
    }

    public function onSale(): bool
    {
        return $this->sale > 0;
    }
}