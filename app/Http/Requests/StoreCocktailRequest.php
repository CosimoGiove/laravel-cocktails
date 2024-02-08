<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Ramsey\Uuid\Type\Decimal;

class StoreCocktailRequest extends FormRequest
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
            "name" =>["required","string","max:48"],
            "main_alcohol"=>["required","string","max:48"],
            "ingredients" =>["string"],
            "preparations" =>["string"],
            "glass_type" =>["string"],
            "serving_temperature" =>["string","max:9"],
            "garnish" =>["string","max:48"],
            "price" =>["decimal:0,2"]
        ];
    }
}
