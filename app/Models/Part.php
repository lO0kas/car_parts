<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Part extends Model 
{
    use HasFactory;
    
    protected $primaryKey = 'part_id';
    protected $fillable = ['name', 'serialnumber', 'car_id'];


    public function car(): HasOne
    {
        return $this->hasOne(Car::class);
    }


    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
}