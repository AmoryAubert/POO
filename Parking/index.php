<?php
require 'parking.php';
$bagnole1 = new voiture("BE 1-EXP-005","22/01/2017",mt_rand(5000,300000),"aston-martin","v12 vanquish 1997","gris foncé","1739");
$bagnole2 = new voiture("BE 1-OQP-123","22/01/2017",mt_rand(5000,300000),"audi","r8 2016","rouge signalisation","1550");
$bagnole3 = new voiture("DE ARN AU 333","22/01/2017",mt_rand(5000,300000),"audi","tt 2006","gris clair","1240");
$bagnole4 = new voiture("BE 1-PLQ-069","22/01/2017",mt_rand(5000,300000),"dodge","viper gts 1997","rouge feu","1520");
$bagnole5 = new voiture("IT 74FFJCSZ","22/01/2017",mt_rand(5000,300000),"ferrari","f430 spider 2005","gris acier","1520");
$bagnole6 = new voiture("BE 1-XXX-619","22/01/2017",mt_rand(5000,300000),"ford","mustang 2015","rouge signalisation","1677");
$bagnole7 = new voiture("FR 54DFEDFR","22/01/2017",mt_rand(5000,300000),"kia","optima 2015","blanche","1468");
$bagnole8 = new voiture("DE KA PA 666","22/01/2017",mt_rand(5000,300000),"lotus","elise 2010","bleu outremer","860");
$bagnole9 = new voiture("BE 1-KFC-444","22/01/2017",mt_rand(5000,300000),"mazda","mx-5 2015","rouge rubis","975");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Parking POO</title>
</head>
<body>
    <main>
<?php
echo $bagnole1->display();
echo $bagnole2->display();
echo $bagnole3->display();
echo $bagnole4->display();
echo $bagnole5->display();
echo $bagnole6->display();
echo $bagnole7->display();
echo $bagnole8->display();
echo $bagnole9->display();

// $bagnole1->roule();
// echo $bagnole1->display();

// $bagnole1->roule();
// echo $bagnole1->display();

// $bagnole1->roule();
// echo $bagnole1->display();
?>
    </main>
</body>
</html>