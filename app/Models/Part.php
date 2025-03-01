<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Part extends Model 
{
    use HasFactory;
    
    protected $primaryKey = 'part_id';
    protected $fillable = ['name', 'serialnumber', 'car_id'];
    protected $attributes = ['name' => '', 'serialnumber' => '', 'car_id' => null];


    public function car(): HasOne
    {
        return $this->hasOne(Car::class, 'car_id', 'car_id');
    }


    public static function filtered(array $filter): LengthAwarePaginator
    {
        $query = Part::query()->select('parts.*');

        if (isset($filter['term']) && $filter['term']) {
            $query->join('cars', 'parts.car_id', 'cars.car_id')
                ->where('parts.name', 'LIKE', '%' . $filter['term'] . '%')
                ->orWhere('parts.serialnumber', 'LIKE', '%' . $filter['term'] . '%')
                ->orWhere('cars.name', 'LIKE', '%' . $filter['term'] . '%');
        }

        return $query->paginate(15);
    }
}