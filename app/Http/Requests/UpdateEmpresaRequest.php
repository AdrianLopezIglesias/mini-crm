<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Empresa;

class UpdateEmpresaRequest extends FormRequest
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
        return Empresa::$rules;
        $rules = Empresa::$rules;
        $rules['nombre'] = $rules['nombre'].",".$this->route("nombre");
        return $rules;
    }
}
