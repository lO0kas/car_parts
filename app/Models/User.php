<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    
    protected $primaryKey = 'user_id';
    protected $fillable = ['name', 'email', 'password', 'remember_token'];
    protected $attributes = ['name' => '', 'email' => '', 'password' => '', 'remember_token' => null];
}
