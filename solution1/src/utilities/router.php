<?php
function loadView($url,$view){
$currentURL = $_SERVER['REQUEST_URI'];
if($currentURL == $url){
    http_response_code(200);
    $body= $_SERVER['DOCUMENT_ROOT']."/views/".$view."/index.php";
    include_once($_SERVER['DOCUMENT_ROOT']."/components/layout/index.php");
}else{
    http_response_code(404);
}
}