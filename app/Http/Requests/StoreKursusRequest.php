<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKursusRequest extends FormRequest
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
            'judul' => 'required|string|max:50',
            'deskripsi' => 'required',
            'durasi' => 'required|integer',
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
            'judul.required' => 'Judul harus diisi',
            'judul.string' => 'Judul harus berupa string',
            'judul.max' => 'Judul maksimal 50 karakter',
            'deskripsi.required' => 'Deskripsi harus diisi',
            'durasi.required' => 'Durasi harus diisi',
            'durasi.integer' => 'Durasi harus berupa angka',
        ];
    }
}
