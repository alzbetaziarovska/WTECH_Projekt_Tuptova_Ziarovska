<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
<<<<<<< Updated upstream
=======
use Illuminate\Notifications\Notifiable;
>>>>>>> Stashed changes
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
<<<<<<< Updated upstream
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'users';

    // The primary key for the table
    protected $primaryKey = 'id';

    // Set this to true because your primary key is auto-incrementing (bigserial)
    public $incrementing = true;
=======
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
>>>>>>> Stashed changes

    protected $casts = [
        'is_admin' => 'boolean',
        'newsletter' => 'boolean',
    ];

<<<<<<< Updated upstream
    // Disable timestamps because your table doesn't have created_at/updated_at
    public $timestamps = false;

    // Define which columns are mass-assignable
    protected $fillable = [
        'f_name',
        'l_name',
        'email',
        'password',
        'is_admin',
        'newsletter',
    ];

    // Hidden fields (sensitive data not included in JSON responses)
    protected $hidden = [
        'password',
    ];

    // Automatically hash the password using md5 when it's set
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = md5($value);
    }
=======
    // Vypnutie timestampov
    public $timestamps = false;
>>>>>>> Stashed changes
}