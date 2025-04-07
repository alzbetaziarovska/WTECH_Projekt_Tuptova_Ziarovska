<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'f_name', 
        'l_name', 
        'email', 
        'password', 
        'is_admin', 
        'newsletter',
    ];

    protected $hidden = [
        'password', 
        'remember_token',
    ];

    protected $casts = [
        'is_admin' => 'boolean',
        'newsletter' => 'boolean',
    ];

    // Vypnutie timestampov
    public $timestamps = false;

    public function cart()
    {
        return $this->hasOne(Cart::class);
    }


}