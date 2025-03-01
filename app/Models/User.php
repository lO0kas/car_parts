<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    protected $primaryKey = 'user_id';
    protected $fillable = ['name', 'email', 'password', 'remember_token'];
    protected $attributes = ['name' => '', 'email' => '', 'password' => '', 'remember_token' => null];
}
