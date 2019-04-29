<?php
require 'form.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>POO: Ex 01</title>
</head>
<body>
<?php

$form = new Form();
echo $form->startForm("POST","index.php");

echo $form->input("text","nom");
echo $form->input("text","prénom");
echo $form->input("email","émail");
echo $form->select("animal",array("chien","chat","pigeon","lama","Panda","koala"));
echo $form->textarea("description");
echo $form->select("genre",array("homme","femme","autre"));
echo $form->input("radio","choix",array("A","B","C"));
echo $form->input("checkbox","choix",array("un chien","un chat","une femme qui mord"));
echo $form->submit("Envoyer");

echo $form->endForm();

?>
</body>
</html>