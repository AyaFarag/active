<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    
    'facebook' => [
        'client_id'     => '476292482774050',
        'client_secret' => '97a46102f332e19104579a577b4b5afb',
        'redirect'      => 'http://localhost:8000/login/facebook/callback',
    ],

    'twitter' => [
        'client_id'     => 'px4nVHwlkOA4awKIGpRMw28Jz',
        'client_secret' => 'KAyQLZvQEKv4mRuJydofybHv277691TJEPhneYnATa1bmOQEe2',
        'redirect'      => 'http://localhost:8000/login/twitter/callback',  
    ], 

    'google' => [
        'client_id' => '1941163447-p7vglt5dp4u7kanfirdspcc0h79k8alb.apps.googleusercontent.com',
        'client_secret' => 'HtRcMgylz-cM4O9NRqpHePzi',
        'redirect' => 'http://localhost:8000/login/google/callback',
    ], 

];
