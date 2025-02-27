<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model 
{
    use HasFactory;

    protected $primaryKey = 'car_id';
    protected $fillable = ['name', 'registration_number', 'is_registered'];


    public function parts(): HasMany
    {
        return $this->hasMany(Part::class);
    }


    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
}