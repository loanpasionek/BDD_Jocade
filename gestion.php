<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jocade - Gestion clients</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>


    </header>    

    <h1 class="hp color1 fs32 padd20p">Gestion des clients</h1>
    <form id="form" method="POST" class="col-12 hp bgcolor1 fs28 color1 padd15p">
        <div class="flex">
            <div class="col-6">
                <div class="flex col-12 padd15p">
                    <p class="col-6 center nomargin nopadding">Nom</p>
                    <input type="text" name="nom">
                </div>
                <div class="flex col-12 padd15p">
                    <p class="col-6 center nomargin nopadding">Prénom</p>
                    <input type="text" name="prenom">
                </div>
            </div>
            <div class="col-6">
                <div class="flex col-12 padd15p">
                    <p class="col-6 center nomargin nopadding">Numéro de téléphone</p>
                    <input type="text" name="telephone">
                </div>
                <div class="flex col-12 padd15p">
                    <p class="col-6 center nomargin nopadding">E-mail</p>
                    <input type="text" name="email">
                </div>
            </div>
        </div>
        <div class="flex jccenter">
            <input name="valider" type="submit" id="button_form" class=""> 
        </div>
    </form>

    <a href="http://localhost/bdd_jocade/" class="padd20p hp fs24">Retour à l'accueil</a>

    <?php
    if (isset($_POST['valider']))
    {

        $hostname="localhost";
        $user="root";
        $password="";
        $dbname="jocade_clients";
        $connect=mysqli_connect($hostname,$user,$password,$dbname);

        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $telephone=$_POST['telephone'];
        $email=$_POST['email'];
        $query="INSERT INTO clients(nom,prenom,telephone,email) VALUES('$nom','$prenom','$telephone','$email')";
        $result=mysqli_query($connect, $query);


        // validation de l'update
        /* if($result)
        {
            echo "Mise à jour effectuée";
        }
        else
        {
            echo "Mise à jour échouée";
        } */
    }

   

    ?>

</body>

