<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['product_id', 'file'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}