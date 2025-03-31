<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // Define the table associated with the model (optional if table name follows Laravel conventions)
    protected $table = 'users';

    // The primary key for the table (optional if it's 'id')
    protected $primaryKey = 'id';

    // Set this to false if your primary key is not auto-incrementing
    public $incrementing = true;

    // Specify the data type of the primary key
    protected $keyType = 'int';

    // Define the timestamps (created_at and updated_at columns) (optional if your table doesn't have them)
    public $timestamps = true;

    // You can specify which columns are mass-assignable
    protected $fillable = ['name', 'email', 'password'];

    // If you have hidden fields like password or sensitive data
    protected $hidden = ['password', 'remember_token'];
}
