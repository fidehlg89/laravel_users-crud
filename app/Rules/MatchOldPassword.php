<?php

namespace App\Rules;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\Environment\Console;
use Illuminate\Http\Request;

class MatchOldPassword implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */

    private $encrypted_current_password;
    public function __construct(String $encrypted_current_password)
    {
        $this->encrypted_current_password=$encrypted_current_password;
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
        return Hash::check($value, $this->encrypted_current_password);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
