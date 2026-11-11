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
        $facility = $this->route('facility');
        $facilityId = is_object($facility)
            ? $facility->id
            : $facility;

        return [
            'category_id' => [
                'required',
                'integer',
                'exists:categories,id',
            ],
            'name' => [
                'required',
                'string',
                'max:150',
                Rule::unique('facilities', 'name')->ignore($facilityId),
            ],
            'building' => [
                'required',
                'string',
                'max:150',
            ],
            'description' => [
                'nullable',
                'string',
            ],
            'latitude' => [
                'nullable',
                'numeric',
                'between:-90,90',
            ],
            'longitude' => [
                'nullable',
                'numeric',
                'between:-180,180',
            ],
            'condition_status' => [
                'required',
                'string',
                'max:30',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'category_id.required' => 'Kategori fasilitas wajib dipilih.',
            'category_id.exists' => 'Kategori fasilitas tidak ditemukan.',
            'name.required' => 'Nama fasilitas wajib diisi.',
            'name.unique' => 'Nama fasilitas sudah digunakan.',
            'name.max' => 'Nama fasilitas maksimal 150 karakter.',
            'building.required' => 'Nama gedung wajib diisi.',
            'building.max' => 'Nama gedung maksimal 150 karakter.',
            'description.string' => 'Deskripsi harus berupa teks.',
            'latitude.numeric' => 'Latitude harus berupa angka.',
            'latitude.between' => 'Latitude harus antara -90 sampai 90.',
            'longitude.numeric' => 'Longitude harus berupa angka.',
            'longitude.between' => 'Longitude harus antara -180 sampai 180.',
            'condition_status.required' => 'Kondisi fasilitas wajib diisi.',
            'condition_status.max' => 'Kondisi fasilitas maksimal 30 karakter.',
        ];
    }
}
