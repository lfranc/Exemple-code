<?php

//function chiffrer($_POST['chaine_depart'], $_POST['crypt']) {

    if (isset($_POST['chaine_depart']) AND isset($_POST['crypt']) ) {

        $alphabet = "abcdefghijklmnopqrstuvwxyz";
        $chaine_depart = $_POST['chaine_depart'];
        $chaine_cryptee = "";
        $crypt = $_POST['crypt'];

        // on parcours toute la chaine de départ
        for ($i = 0; $i < strlen($chaine_depart); $i++) {

            // on parcours l'alphabet pour trouver la correspondance avec le caractère de départ sélectionné
            for ($j = 0; $j < strlen($alphabet); $j++) {

                //on compare les deux caractères (celui de départ et celui de l'alphabet)
                if ($chaine_depart[$i] == $alphabet[$j]) {

                    if ($alphabet[$j+$crypt] > 25) {
                        //on ajoute le caractere crypte à la suite de la chaine de réponse  k       
                        $chaine_cryptee .= $alphabet[$j+$crypt-25];

                    } else {
                        //on ajoute le caractere crypte à la suite de la chaine de réponse
                        $chaine_cryptee .= $alphabet[$j+$crypt];
                    }
                }

            }
        }

        echo "Message crypté : " . $chaine_cryptee;
    }

// }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="chiffrecesar1.php" method="post">
    <input type="text" name="chaine_depart"><br>
    <input type="number" name="crypt" min="0" max="5"><br>
    <input type="submit" value="crypter">
</form>
</body>
</html>