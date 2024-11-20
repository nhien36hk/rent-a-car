<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => function ($key) {
        if (str_contains($key, 'email')) {
            return 'The email you entered does not exist.';
        } else if (str_contains($key, 'password')) {
            return 'The password you entered is incorrect.';
        }
        return 'These credentials do not match our records.';
    },
    'password' => 'The provided password is incorrect.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',

];
