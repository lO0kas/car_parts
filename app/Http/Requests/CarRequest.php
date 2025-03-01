<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'is_registered' => 'boolean',
            'registration_number' => 'required_if_accepted:is_registered|nullable|string|max:255'
        ];
    }


    protected function prepareForValidation(): void
    {
        $this->mergeIfMissing(['name' => '', 'is_registered' => false, 'registration_number' => null]);
        
        if (!$this->is_registered && $this->registration_number) {
            $this->merge(['registration_number' => null]);
        }
    }
}
