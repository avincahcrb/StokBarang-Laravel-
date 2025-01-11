<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorestokbarangRequest extends FormRequest
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
            'stok' => 'required|numeric',
            'status' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'nama_barang.required' => ':attribute Tidak Boleh Kosong!',
            'stok.numeric' => ':attribute Harus Angka!',
            'stok.required' => ':attribute Tidak Boleh Kosong!',
        ];
    }
    public function attributes(): array
    {
        return [
            'kode_barang' => 'Kode Barang',
            'nama_barang' => 'Nama Barang'
        ];
    }
}
