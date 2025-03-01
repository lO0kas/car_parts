<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'serialnumber' => 'required|string|max:255',
            'car_id' => 'nullable|exists:cars,car_id'
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->mergeIfMissing(['name' => '', 'serialnumber' => '', 'car_id' => null]);
    }
}
