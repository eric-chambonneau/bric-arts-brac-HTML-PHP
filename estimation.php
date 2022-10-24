<?php

// on affiche que l'estimation du prix du rachat en cours
// echo " <h1>Estimation en cours...</h1> ";

// récupérer une donnée du formulaire
//  echo $_POST['annee'];

// variable pour récupérer l'année
// $nom = $_POST['nom'];
// $type = $_POST['type'];

// extraire toutes les données du formulaire et de les mettre dans une variable
extract($_POST);


// condition
if (!empty($nom) && !empty($type) && !empty($annee)) {
    
    echo  "<h1>Estimation en cours...</h1> " . "<br>";

    //je récupère l'année de réaliqtion de l'oeuvre
    echo "Année : " . $annee;

    // vérification de l'année
    if ($annee <= 1200) {
        echo "100000";
    }

    else if ($annee > 1600 && $annee <= 1800 )
    {
        echo '76000'
    }
    
    else if($annee > 1200 && $annee <= 1600) {
        echo '32000';
    }

    else if($annee > 1800 && $annee <= 1999) {
        echo '15000';
    }
    else {
        echo "non accepté";
    }

}

// vérification types d'oeuvre

echo $type . "<br>";


else{
    echo "Merci de remplir tous les champs <br>";
}

// echo "l oeuvre s'appelle :" .$nom . "<br>";
// echo "Le type d'oeuvre est : " .$type . "<br>";
