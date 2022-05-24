<!DOCTYPE html>
<html lang="fr">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Roulette</title>
	<link rel="stylesheet" type="text/css" >
</head>
<body>
    <!-- Les commentaires en HTML -->
	<h1>Rien ne va plus</h1>
    
    <?php

        $resultat = rand (0, 36); //définition de la variable resultat

        echo 'RESULTAT : ' .$resultat. '<br/><br/>';

        for ($nbparis = 1; $nbparis <= $_GET['nbparis']; $nbparis++) { // on fait une boucle pour tester tous les paris

            if ($_GET['pari'.$nbparis] == $resultat) {
                echo 'Vous avez parié sur le : ' . $_GET['pari'.$nbparis] . '<br/><br/>' . ' Vous avez gagné. ' . '<br/><br/>';
                echo 'Votre gain est de ' . $_GET['pari'.$nbparis]*2; // cas : victoire
            }
            else {
                echo  'Vous avez parié sur le : '. $_GET['pari'.$nbparis] . '<br/><br/>' . ' Dommage, vous avez perdu. ' . '<br/><br/>';
                echo 'Votre gain est de : 0'. '<br/><br/>'; // cas : défaite
            }
        }

        
          




    ?>

</body>
</html>