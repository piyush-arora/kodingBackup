<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    
    'facebook' => [
    'client_id' => '1532291317100689',
    'client_secret' => '5d2036db119ff960ae1263391a0b6ae1',
    'redirect' => 'http://hackincloud.com/fbRedirect',
    ],
    
    'google' => [
    'client_id' => '19079567562-bi63v7i0dgm3h05p0n5r4tnle70u3crv.apps.googleusercontent.com',
    'client_secret' => 'pd3ceh7OwHbQ0snYq8RiFszv',
    'redirect' => 'http://hackincloud.com/goRedirect',
    ],
];
