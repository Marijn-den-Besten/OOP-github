<?php

include_once 'Pokemon.php';
include_once 'Charmeleon.php';
include_once 'Pikachu.php';
$Charmeleon = new Charmeleon('Charmo');
$Pikachu = new Pikachu('Pikachu1');
$Pikachu2 = new Pikachu('Pikachu2');
$Pikachu->getName();
$Pikachu->setName('Pika');
echo $Pikachu->getHP();
echo '<br>';
echo $Charmeleon->getHP();
echo '<br>';
echo '-------------------------------------------------------------------------------------';
$Pikachu->Attack($Charmeleon, 0);
$Charmeleon->Attack($Pikachu, 3);
echo '-------------------------------------------------------------------------------------';
echo '<br>';
echo $Pikachu->getHP();
echo '<br>';
echo $Charmeleon->getHP();
echo '<br>';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>Sick</title>
<body>
</body>
</html>