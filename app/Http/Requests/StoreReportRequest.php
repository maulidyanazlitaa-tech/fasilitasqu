<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReportRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'facility_id' => [
                'required',
                'integer',
                'exists:facilities,id',
            ],

            'description' => [
                'required',
                'string',
                'min:10',
            ],

            'photos' => [
                'nullable',
                'array',
                'max:5',
            ],

            'photos.*' => [
                'required',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:5120',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'facility_id.required' => 'Fasilitas wajib dipilih.',
            'facility_id.exists' => 'Fasilitas yang dipilih tidak ditemukan.',
            'description.required' => 'Deskripsi kerusakan wajib diisi.',
            'description.min' => 'Deskripsi kerusakan minimal 10 karakter.',
            'photos.max' => 'Maksimal 5 foto yang dapat diunggah.',
            'photos.*.image' => 'File harus berupa gambar.',
            'photos.*.mimes' => 'Format foto harus JPG, JPEG, PNG, atau WEBP.',
            'photos.*.max' => 'Ukuran setiap foto maksimal 5 MB.',
        ];
    }
}
