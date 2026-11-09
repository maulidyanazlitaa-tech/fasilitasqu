<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class VerifyReportRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'decision' => [
                'required',
                Rule::in(['terverifikasi', 'ditolak']),
            ],

            'damage_level' => [
                'required_if:decision,terverifikasi',
                'nullable',
                'integer',
                'between:1,5',
            ],

            'rejection_reason' => [
                'required_if:decision,ditolak',
                'nullable',
                'string',
                'min:5',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'decision.required' => 'Keputusan verifikasi wajib dipilih.',
            'decision.in' => 'Keputusan harus terverifikasi atau ditolak.',
            'damage_level.required_if' => 'Tingkat kerusakan wajib diisi untuk laporan yang diverifikasi.',
            'damage_level.between' => 'Tingkat kerusakan harus berada pada skala 1 sampai 5.',
            'rejection_reason.required_if' => 'Alasan penolakan wajib diisi.',
            'rejection_reason.min' => 'Alasan penolakan minimal 5 karakter.',
        ];
    }
}
