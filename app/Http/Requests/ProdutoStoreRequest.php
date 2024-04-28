<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoStoreRequest extends FormRequest
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
            'nome' => 'required',
            'preco' => 'required|numeric',
            'descricao' => 'required',
            'quantidade' => 'required|numeric',
        ];
    }

    /**
     * Get custom error messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'required' => "Por favor, preencher todos os campos corretamente.",
            'preco.numeric' => "Por favor, preencher o campo 'preço' com um valor numérico",
            'quantidade.numeric' => "Por favor, preencher o campo 'quantidade' com um valor numérico"
        ];
    }
}
