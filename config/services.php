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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'firebase' => [
        'apiKey' => "AIzaSyBVYDR2HWLO9Che85FuX1dLNMw4dkIK76g",
        'authDomain' => "sismonitoring-730ad.firebaseapp.com",
        'databaseURL' => "https://sismonitoring-730ad-default-rtdb.firebaseio.com",
        'projectId' => "sismonitoring-730ad",
        'storageBucket' => "sismonitoring-730ad.appspot.com",
        'messagingSenderId' => "630375801851",
        'appId' => "1:630375801851:web:21d7a8d152de4ef4dba15e",
        'measurementId' => "G-VJDEWPL32N",
    ],

];
