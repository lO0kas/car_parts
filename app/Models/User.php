<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = 'part_id';
    protected $fillable = ['name', 'email', 'password', 'remember_token'];
    protected $attributes = ['name' => '', 'email' => '', 'password' => '', 'remember_token' => null];
}
