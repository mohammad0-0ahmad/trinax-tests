<?php
    $opts = [
        "http" => [
            "method" => "GET",
            "header" => "Authorization: bearer 6f6e65662939db126c5239e9a761bb2f"
        ]
    ];
    $context = stream_context_create($opts);
    $url='https://arbetsprov.trinax.se/api/v1/timereport?';
    $url .= $_SERVER['QUERY_STRING']; 
    $json = @file_get_contents($url,false,$context);
    print_r($json?$json:"[]");

