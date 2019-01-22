<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewCreateRequest extends FormRequest
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
            'nota' => 'required',
            'user_id' => 'required',
            'viagems_id' => 'required'
        ];
    }

    protected function failedValidation(Validator $validator){
        throw new HttpResponseException(
            response()->json([
                'status' => 1,
                'data' => $validator->errors()->all(),
                'msg' => 'Erro de validação'
            ], 422)
        );
          // throw new \Error('erro que eu estou a dizer');
    }
   
    public function messages(){
        return[
          'nota.required' => 'Nota é necessario',
          'user_id.required' => 'User é necessario, isto nao devia aparecer',
          'viagems_id.required' => 'Viagem é necessario, isto nao devia aparecer',
        ];
    }
}
