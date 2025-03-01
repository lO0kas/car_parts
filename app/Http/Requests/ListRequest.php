<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'term' => 'nullable|string|max:255',
            'page' => 'nullable|int'
        ];
    }


    protected function prepareForValidation(): void
    {
        $this->mergeIfMissing(['term' => null, 'page' => null]);

        if ($this->term != $this->old('term')) {
            $this->merge(['page' => null]);
        }
    }
}
