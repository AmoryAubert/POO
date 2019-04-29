<?php
require 'parking.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Parking POO</title>
</head>
<body>
<?php
$bagnole1 = new voiture("EXP-005","22-01-2017","15234","Audi","R8","rouge","200");
echo $bagnole1->display();
?>
</body>
</html>