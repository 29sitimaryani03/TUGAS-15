<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\UserController;

class UserStoreRequest extends FormRequest
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
            'nama' => 'required|unique:user,nama',
            'username' => 'required|unique:user,username',
            'email' => 'required|email:rfc,dns',
            'jenis_kelamin' => 'required',
            'password' => 'required',
            'no_handphone' => 'required',
        ];
    }

    function messages(){
        return[
            'nama.required' => 'Field Nama Wajib Diisi',
            'nama.unique' => 'nama sudah terpakai',
            'username.required' => 'Field username wajib di isi',
            'username.unique' => 'Username Tersebut Sudah Terdaftar',
            'email.required' => 'Field email wajib di isi',
            'email.email' => 'Field email tidak valid',
            'password.required' => 'Field password wajib di isi',
            'jenis_kelamin.required' => 'Field jenis kelamin wajib di isi',
            'no_handphone.required' => 'Field No Hp wajib di isi',
        ];
    }
}
