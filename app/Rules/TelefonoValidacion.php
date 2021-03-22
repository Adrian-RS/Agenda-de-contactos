<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class TelefonoValidacion implements Rule
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
        return preg_match("/^8(0|2|4)9(|\s|-)[0-9]{3}(|\s|-)[0-9]{4}$/", $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Por favor ingrese un numero de telefono dominicano.';
    }
}
