<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'client_id' => '317203213038880',
        'client_secret' => 'ca1c69b95f1578af97f08e871a6883eb',
        'redirect' => 'http://localhost:8000/callback/facebook',
    ],

    'google' => [
        'client_id' => '979208480935-r1sfee50g6h1lgg0ob985vs280n2eel5.apps.googleusercontent.com',
        'client_secret' => 'GIp5RWlKSJb_u0NgnQxPtqo0',
        'redirect' => 'http://localhost:8000/callback/google',
     ],

];
