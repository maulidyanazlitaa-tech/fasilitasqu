<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateFacilityRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $facilityId = $this->route('facility')?->id;

        return [
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('categories', 'name')->ignore($facilityId),
            ],
            'severity_weight' => 'required|numeric|between:0,9.99',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama kategori wajib diisi.',
            'name.unique' => 'Nama kategori sudah digunakan.',
            'severity_weight.required' => 'Bobot kategori wajib diisi.',
            'severity_weight.numeric' => 'Bobot kategori harus berupa angka.',
            'severity_weight.between' => 'Bobot kategori harus antara 0 sampai 9.99.',
        ];
    }
}
