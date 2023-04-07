<?php

    // Authority
    $CUSTOM_PERMITS = [
        "frontend" => [
            "commercial" => [
                "name" => "Commerciale",
                "icon" => "<i class='bi bi-cash-stack'></i>",
                "bg" => "bg-success",
                "tx" => "text-white",
                "color" => "success",
                "links" => [
                    "login" => "$PATH->site/preventive/account/login/",
                    "sign-in" => "",
                    "password-restore" => "$PATH->site/preventive/account/password-restore/",
                    "password-recovery" => "$PATH->site/preventive/account/password-recovery/",
                    "password-set" => "$PATH->site/preventive/account/password-set/"
                ],
                "function" => [
                    "creation" => "commercial",
                    "modify" => "commercial",
                    "info" => "infoCommercial"
                ]
            ]
        ]
    ];

?>