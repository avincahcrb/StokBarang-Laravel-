<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatestokbarangRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */

    public function rules(): array
    {
        return [
            'nama_barang' => 'required',
            'stok' => 'required|numeric'
        ];
    }

    public function messages(): array
    {
        return [
            'nama_barang.required' => 'Nama Barang Tidak Boleh Kosong',
            'stok.required' => ':Stok Barang Tidak Boleh Kosong',
            'stok.numerik' => ':Stok Barang Harus Angka'
        ];
    }
}
