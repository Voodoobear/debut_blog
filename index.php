<?php

session_start();

if (!empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['age']) AND !empty($_POST['pseudo']))
{
	$_SESSION['prenom'] = $_POST['prenom'];
	$_SESSION['nom'] = $_POST['nom'];
	$_SESSION['age'] = $_POST['age'];
	$_SESSION['pseudo'] = $_POST['pseudo'];
}


?>

<!-- ====================================== FIN CSSJAVASCRIPHPSQL =============================================== -->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Mono:300,400,500" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
		<link rel="stylesheet" href="./css/style.css">
		<title>Petit blog d'exercices</title>
	</head>
	<body>

    	<h1 style="text-decoration: underline; text-align: center; color: rgba(50,50,50,0.8);">Bienvenue sur la page des Sessions</h1>
		<h2 style="text-align: center;">Page d'Accueil</h2>

		<ul style="list-style-type: none; display: flex; justify-content: space-around; margin: 2em 0 5em 0;">
			<li><a style="text-decoration: none;" href="index.php">Lien vers index.php</a></li>
			<li><a style="text-decoration: none;" href="informations.php">Lien vers informations.php</a></li>
			<li><a style="text-decoration: none;" href="mapage.php">Lien vers mapage.php</a></li>
			<li><a style="text-decoration: none;" href="monscript.php">Lien vers monscript.php</a></li>
		</ul>

		<?php
		if (!isset($_SESSION['prenom']) AND !isset($_SESSION['nom']) AND !isset($_SESSION['age']))
		{
		?>
    		<h2 style="color: rgba(0,0,100,0.9);">Veuillez vous enregistrer pour pouvoir accéder au contenu du site :</h2>
    		<form method="post" action="index.php" style="color: rgba(0,0,0,0.9);">
        		<p>
            		Votre prénom :<br>
            		<input type="text" name="prenom" />
        		</p>
        		<p>
            		Votre nom :<br>
            		<input type="text" name="nom">
        		</p>
        		<p>
        			Votre pseudo :<br>
        			<input type="text" name="pseudo" />
        		</p>
        		<p>
            		Votre âge :<br>
            		<input type="number" name="age">
        		</p>
        		<p>
            		<input type="submit" name="Valider" style="color: rgba(0,0,100,0.9); background-color: rgba(150,150,150,0.8); border: 1px solid rgba(150,150,150,0.8); font-weight: bold;">
        		</p>
    	</form>   

		<?php
		}
		else
		{
		?>

			<p style="margin-left: 2em;">
				Salut <?php echo htmlspecialchars($_SESSION['pseudo']); ?> ! !
			</p>
			<p style="margin-left: 2em;">
				Tu es à l'accueil de mon site ! Tu veux aller sur une autre page  ?
			</p>
			
			<?php include('minichat.php'); ?>
			
			<p style="margin-top: 5em; text-align: center;"><a href="destruction.php">Me déconnecter</a></p>
		<?php
		}
		?>

		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="./js/script.js"></script>
	</body>
</html>