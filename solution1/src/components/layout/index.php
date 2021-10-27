<?php
include_once($_SERVER['DOCUMENT_ROOT']."/utilities/index.php");
ob_start();
require $body;
ob_end_clean();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="https://www.trinax.se/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <style>
        <?php
        include_once($_SERVER['DOCUMENT_ROOT']."/components/layout/layout.css");
        if(isset($view)){
           include_once($_SERVER['DOCUMENT_ROOT']."/views/".$view."/style.css"); 
        }
        ?>
    </style>
    <link rel="stylesheet" href="./style.css">
    <title><?php echo isset($title) ? "Trinax | $title" :"Trinax";?></title>
</head>
<?php
if(isset($body)){
    require $body;
}?>
<script>
    <?php 
       include_once($_SERVER['DOCUMENT_ROOT']."/components/layout/layout.js");
    ?>
</script>
</html>