<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories'; // Define the table name (optional)
    
    protected $primaryKey = 'id'; // Define the primary key (optional)

    public $timestamps = false; // Disable timestamps since they are not in the table

    protected $fillable = [
        'name',
    ];

    /**
     * Define relationship: A Category has many Products.
     */
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
