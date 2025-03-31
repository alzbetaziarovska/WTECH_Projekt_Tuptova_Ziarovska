<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts'; // Define the table name (optional)
    
    protected $primaryKey = 'id'; // Define the primary key (optional)

    public $timestamps = false; // Disable timestamps since they are not in the table

    protected $fillable = [
        'user_id',
    ];

    /**
     * Define relationship: A Cart belongs to a User.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
