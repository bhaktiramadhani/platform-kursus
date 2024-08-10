<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMateriRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'kursus_id' => "required|exists:kursuses,id",
            'judul' => "required|string|max:255",
            'deskripsi' => "required",
            'video' => "required|url",
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'kursus_id.required' => 'Kursus harus diisi',
            'kursus_id.exists' => 'Kursus tidak ditemukan',
            'judul.required' => 'Judul harus diisi',
            'judul.string' => 'Judul harus berupa string',
            'judul.max' => 'Judul maksimal 255 karakter',
            'deskripsi.required' => 'Deskripsi harus diisi',
            'video.required' => 'Video harus diisi',
            'video.url' => 'Video harus berupa URL',
        ];
    }
}
