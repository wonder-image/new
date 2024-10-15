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
        "phone" => [],
        "email" => [],
        "request" => [
            "sql" => [ 
                "length" => 10000 
            ]
        ],
        "privacy" => []
    ];