<?php

return [

    'linode' => [
        'api_key' => env('LINODE_API_KEY')
    ],
    'digital_ocean' => [
        'api_key' => env('DIGITAL_OCEAN_API_KEY')
    ],
    'aws' => [
        'key' => env('AWS_KEY'),
        'secret' => env('AWS_SECRET')
    ]

];