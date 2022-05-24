<!DOCTYPE html>
<html lang="fr">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Roulette</title>
	<link rel="stylesheet" type="text/css" >
</head>
<body>
    <?php
	
    echo 'Bienvenue '.$_GET['name'].'<br/>';
    echo '<br/>';
    echo 'Faites vos jeux'.'<br/>';
    echo '<br/>';
    
    ?>
       
    <form action = "resultat.php" method = "get"> 

            <!-- on appelle le fichier resultat.php -->

        <?php

                $nbparis = 1; // Déclaration et initialisation du compteur

            echo 
            '<label>
                Nombre de paris : <input  name="nbparis" value="' . $_GET['nbparis'] . '" >
            </label><br/><br/>';

            While ($nbparis <= $_GET['nbparis']) {

                echo // liste déroulante des 37 valeurs possibles de la roulette

                '<label for="pari ">Pariez sur un nombre :
                    
		            <select name="pari'. $nbparis .'" id="pari"> 
			            <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                    </select>

                </label>
			        
                    
		        

                <label>Quelle est votre mise ?</label>
                <label>  <input type="number" name="somme"></label>';

                $nbparis++; // Incrémentation du compteur

                echo '<br/>';
                echo '<br/>';

            }
            
        ?>

        <p>
		    <input type="submit" name="jouer" value="Envoyer"> <!-- Bouton Envoyer -->
        </p>
        
        
    </form>

    

    


</body>
</html>