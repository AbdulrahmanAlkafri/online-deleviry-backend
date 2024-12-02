<?php
namespace App\Rules;  

use Illuminate\Contracts\Validation\Rule;  

class ValidSyrianPhone implements Rule  
{  
    public function passes($attribute, $value)  
    {  
        // Check if the phone number matches the Syrian format  
        return preg_match('/^\+963[0-9]{9}$/', $value);  
    }  

    public function message()  
    {  
        return 'The :attribute must be a valid Syrian phone number.';  
    }  
}