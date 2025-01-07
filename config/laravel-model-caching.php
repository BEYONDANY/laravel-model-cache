<?php

return [
    'cache-prefix' => '',

    'cache-expired-seconds' => env('MODEL_CACHE_SECONDS', 300),

    'enabled' => env('MODEL_CACHE_ENABLED', true),

    'use-database-keying' => env('MODEL_CACHE_USE_DATABASE_KEYING', true),

    'store' => env('MODEL_CACHE_STORE'),
];
