<?php
$nom = $_REQUEST['nom'];
$prenom = $_REQUEST['prenom'];
$mail = $_REQUEST['mail'];
$tel = $_REQUEST['tel'];
//$type = $_REQUEST['type'];
// enregistrerEnBase(...); pas dans cette itération
// générer le nom de user : à faire
// générer le mdp travail à faire


function generateLogin($nom, $prenom)
	{	
		$lettrePrenom = substr($prenom, 0, 1);		
		$login = $lettrePrenom . $nom;
		return $login;
	}


function generatePass()
	{
		$caracteres = array ("a","b","c","d","e","f","g","h","i","j","k","l","m","n",
					  "o","p","q","r","s","t","u","v","w","x","y","z",0, 1, 2, 3, 4, 5, 6, 7, 8, 9);

		$carAleatoires = array_rand($caracteres, 6);
		$pass = "";

		foreach($carAleatoires as $i)
			{
 				$pass .= $caracteres[$i];
			}

		
		return $pass;
	}


$login = generateLogin($nom, $prenom);
$mdp = generatePass();



echo "Login : ".$login."<br>Mot de passe : ".$mdp."<br>Merci de votre visite et à bientôt";
?>
