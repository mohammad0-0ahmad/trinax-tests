<?php
require($_SERVER['DOCUMENT_ROOT']."/constants.php");
    $opts = [
        "http" => [
            "method" => "GET",
            "header" => "Authorization: bearer ".$accessKey
        ]
    ];
    $context = stream_context_create($opts);
    $url='https://arbetsprov.trinax.se/api/v1/timereport?';
    $url .= $_SERVER['QUERY_STRING']; 
    $json = @file_get_contents($url,false,$context);
    print_r($json?$json:"[]");

