<?php

$matches= [

[
    "squadra_casa" => "Olimpia Milano" , 
    "squadra_fuoricasa" => "Acqua San Bernardo Cantù",
    "punti_casa" => "85",
    "punti_fuoricasa" => "94",
],
[
    "squadra_casa" => "Dinamo Sassari" , 
    "squadra_fuoricasa" => "Fortitudo Bologna",
    "punti_casa" => "88",
    "punti_fuoricasa" => "43",
],
[
    "squadra_casa" => "Montegranaro" , 
    "squadra_fuoricasa" => " Cimberio Varese",
    "punti_casa" => "112",
    "punti_fuoricasa" => "98",
],
];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Match</title>
</head>
<body>
    <?php 
    for($i = 0; $i < count($matches); $i++){
        $partita = $matches[$i];
        $result = $partita["squadra_casa"] . " - " . $partita["squadra_fuoricasa"] . " | " . $partita["punti_casa"] . " - " . $partita["punti_fuoricasa"]
    ?>
            <h3><?php echo $result ?></h3>
    <?php 
        }
    ?>
</body>
</html>