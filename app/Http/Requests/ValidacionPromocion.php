<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionPromocion extends FormRequest
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
            'titulo' => 'required|max:100',
            'descripcion' => 'required|max:500',
            'foto_up' => 'nullable|image|max:1024'
        ];
    }
    public function messages()
    {
        return [
            'foto_up.max' => 'La imagen no puede tener un peso mayor a 2MB'
        ];
    }
}
