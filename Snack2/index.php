<?php 

$name = array_key_exists("name", $_GET) ? $_GET["name"] : '';
$email = array_key_exists("email", $_GET) ? $_GET["email"] : '';
$age = array_key_exists("age", $_GET) ? $_GET["age"] : '';
$access = "";

if((!$name || strlen($name) < 3) || (!$email || strpos($email, "@") == false || strpos($email, ".") == false) || (!$age || is_numeric($age) == false)){
    $access = "Accesso negato";
}else{
    $access = "Accesso consentito";
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>
    <body>
        <h1><?php  echo $access ?></h1>
    </body>
</html>