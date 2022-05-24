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
	<h1>Inscription</h1>
	
	<section>
	<form action = "jeu.php" method = "get"> <!-- on appelle le fichier jeu.php -->
		<p>
            <label>Nom : <input type="text" name="name"> <!-- On renseigne le nom -->
            </label>
        </p>

        <label>
            Nombre de paris : <input  name="nbparis"> <!-- On renseigne le nombre de paris -->
        </label>


        <p>
		    <input type="submit" name="jouer" value="Envoyer"> <!-- Bouton Envoyer -->
        </p>
	</form>



    </section>





</body>
</html>