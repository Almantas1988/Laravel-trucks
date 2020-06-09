<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MarkeName implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if ($value === ('Volvo') || $value === ('VAZ') || $value === ('Mercedes')
        || $value === ('GAZ')) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Įveskite vieną iš automobilio markių: Volvo, VAZ, Mercedes, GAZ.';
    }
}
