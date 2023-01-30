<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FileFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            
            '_file' => 'required|file|mimes:txt|max:57',
        ];
    }


    public function messages() {

        return [

            '_file.required' => 'Dosya seçiniz!',
            '_file.mimes' => 'Tip, txt olabilir!',
            '_file.max' => '57 kb olabilir!'
       ];
    }
}
