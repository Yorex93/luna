<?php

return [

    /*
    |--------------------------------------------------------------------------
    | API messages
    |--------------------------------------------------------------------------
    |
    |
    */

    'user' => [

        'registered_with_verify_email' => 'Sign up successful! Please verify your email before signing in. Check your email for the verification link. <a href="/login">Sign in here</a>',

        'not_registered' => "<h6>You're not yet registered<br/><small>:email</small></h6><a href='/register'>Click here to sign up</a>.",

        // All unauthorized actions
        'success' => [
            'restore'   => "Successfully restored :first_name!",
            'revoke'    => "Successfully killed :first_name's session!",
            'delete'    => "Successfully removed :first_name!",
        ],

        // All unauthorized actions
        'unauthorized' => [
            'create'    => "You're not allowed to create user.",
            'delete'    => "You're not allowed to delete user.",
            'update'    => "You're not allowed to update user.",
            'restore'   => "You're not allowed to restore user.",
            'revoke'   => "You're not allowed to revoke user access.",
        ],

    ],

];
