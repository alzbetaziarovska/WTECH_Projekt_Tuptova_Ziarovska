<?php

namespace App\Models;

use App\Review;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products'; // Explicitly defining table name (optional)

    protected $primaryKey = 'id'; // Primary key

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

    public function reviews()
    {
        return $this->hasMany(Review::class, 'product_id');
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
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