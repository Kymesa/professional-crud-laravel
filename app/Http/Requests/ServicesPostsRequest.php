<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicesPostsRequest extends FormRequest
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
            'title' => ['required', 'min:3', 'max:50'],
            'price' => ['required', 'numeric'],
            'stock' => ['required', 'numeric'],
            'img' => ['required', 'image'],
            'category_id' => ['required', 'exists:categories,id']
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'El titulo es requerido',
            'title.min' => 'Minimo 3 Caracteres',
            'tile.max' => 'Maximo 50 Caracteres',
            'category_id.required' => 'Category requerido',
            'category_id.max' => 'Category maximo 50 Caracteres',
            'price.required' => 'Price requerido',
            'price.numeric' => 'Price debe ser solo numerico',
            'stock.required' => 'Stock requerido',
            'stock.numeric' => 'Stock debe ser solo numerico',
            'category_id.exists' => 'Seleccione una categoria',
            'img.required' => 'Image requeridad',
            'img.image' => 'Debe ser una imagen',
            'price.min' => 'Minimo '
        ];
    }
}
