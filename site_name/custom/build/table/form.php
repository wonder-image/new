<?php

    $TABLE->FORM = [
        "name" => [
            "input" => [
                "format" => [
                    "sanitize" => false,
                    "sanitizeFirst" => true
                ]
            ]
        ],
        "surname" => [
            "input" => [
                "format" => [
                    "sanitize" => false,
                    "sanitizeFirst" => true
                ]
            ]
        ],
        "email" => [],
        "request" => [
            "sql" => [ 
                "lenght" => 10000 
            ]
        ],
        "privacy" => []
    ];

?>