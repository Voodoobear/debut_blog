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


<!DOCTYPE html>
<html>
	<?php include('include_head.php'); ?>
	<body>
<<<<<<< HEAD

    	<h1>Bienvenue sur la page des Sessions</h1>
		<h2>Page d'Accueil</h2>
=======
		<h1 style="text-align: center;">Page d'Accueil</h1>
>>>>>>> e0c98905b47f2fe767821909fbf42f98cd18990a

		<ul>
			<li><a  href="index.php">Lien vers index.php</a></li>
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
		include('include_script.php');
		?>

	</body>
</html>