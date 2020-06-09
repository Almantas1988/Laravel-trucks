<?php

namespace App\Http\Requests;

use App\Rules\TruckYear;
use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
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

        $rules = [

            'marke' => 'required|max:32',
            'gamybos_metai' => ['required', new TruckYear],
            'savininko_vardas_pavarde' => 'required|max:64',
            'savininku_skaicius' => 'max:12',
            'komentarai' => 'max:255',

        ];

        return $rules;
    }

    public function messages() {

        $message = [
            'marke.required' => "* Markės laukelis privalomas",
            'gamybos_metai.required' => "* Gamybos metų laukelis privalomas",
            'savininko_vardas_pavarde.required' => "* Savininko vardo ir pavardės laukelis privalomas",

        ];

        return $message;
    }
}
