<?php
include_once("utilities/router.php");

loadView("/","home");
loadView("/reports","show-reports");
loadView("/reports/create","create-report");

if(http_response_code()==404 ){
    include_once("./views/404/index.php");
}

