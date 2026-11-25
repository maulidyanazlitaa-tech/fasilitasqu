<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->role === 'admin';
    }

    public function rules(): array
    {
        $category = $this->route('category');

        return [
            'name' => [
                'required',
                'string',
                'max:100',
                Rule::unique('categories', 'name')->ignore($category?->id),
            ],
            'severity_weight' => [
                'required',
                'numeric',
                'between:1,5',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama kategori wajib diisi.',
            'name.unique' => 'Nama kategori sudah digunakan.',
            'name.max' => 'Nama kategori maksimal 100 karakter.',
            'severity_weight.required' => 'Bobot dampak wajib diisi.',
            'severity_weight.numeric' => 'Bobot dampak harus berupa angka.',
            'severity_weight.between' => 'Bobot dampak harus antara 1 sampai 5.',
        ];
    }
}