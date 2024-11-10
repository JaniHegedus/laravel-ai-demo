<?php
return [
    'paths' => ['api/*'],  // Specify the routes for CORS (e.g., ['api/*', 'sanctum/csrf-cookie'])
    'allowed_methods' => ['*'],  // Allow all HTTP methods (e.g., 'GET', 'POST', etc.)
    'allowed_origins' => ['*'],  // Allow requests from all origins
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],  // Allow all headers
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,  // Set to true if cookies are needed in CORS requests
];
