<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model 
{
    use HasFactory;

    protected $primaryKey = 'car_id';
    protected $fillable = ['name', 'is_registered', 'registration_number'];
    protected $attributes = ['name' => '', 'is_registered' => false, 'registration_number' => null];


    public function parts(): HasMany
    {
        return $this->hasMany(Part::class, 'car_id', 'car_id');
    }


    public static function filtered(array $filter): LengthAwarePaginator
    {
        $query = Car::query();

        if (isset($filter['term']) && $filter['term']) {
            $query->where('name', 'LIKE', '%' . $filter['term'] . '%')->orWhere('registration_number', 'LIKE', '%' . $filter['term'] . '%');
        }

        return $query->paginate(15);
    }
}