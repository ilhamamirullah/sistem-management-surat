<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'nama'=> 'required',
          'instansi'=> 'required',
          'alamat'=> 'required',
          'email'=> 'required',
          'no_telp'=> 'required',
          'no_identitas'=> 'required',
        ];
    }
}
