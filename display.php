<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jocade - Liste des clients</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>


    
<?php

 // affichage des clients

 try{

    $bdd = new PDO('mysql:host=localhost;dbname=jocade_clients;charset=utf8', 'root', '');
}

catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM clients ORDER BY nom');

?>

    <h1 class="hp fs32 color1 flex padd20p">Liste des clients</h1>

<?php


while ($donnees = $reponse->fetch())
{
    echo '' . '
    <div class="hp fs24 color1 bgcolor1 padd15p"> 
        <p>
        ' . $donnees['nom'] . ' ' . $donnees['prenom'] . ' ' . $donnees['telephone'] . ' ' . $donnees['email']
         . ' <img src="img/edit.png" class="w2"><img src="img/remove.png" class="w2">
        </p> 
    </div>' . '</br>';
}

$reponse->closeCursor();

$reponse->closeCursor();

?>

<a href="http://localhost/bdd_jocade/" class="padd15p hp fs24">Retour à l'accueil</a>


</body>