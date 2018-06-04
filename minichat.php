<?php 






?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>

		#mess {
			text-align: left;
			width: 500px;
			margin-top: 50px;
		}
		.mess {
			text-align: right;
		}
		
		
	</style>
</head>
<body>
	<div id="mess">
		<form action="minichat_post.php" method="pseudo" class="mess">
			<label for="name">Nom : </label>
			<input type="text" name="pseudo">
			<br>
			<br>
			<label for="message">Message : </label>
			<input type="text" name="message">
			<br>
			<br>
			<input type="submit" name="envoyer">
		</form>
	</div>

</body>
</html>

<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT pseudo,message FROM minichat LIMIT 0, 10');

echo '<p>Voici les 10 premières entrées de la table jeux_video :</p>';
while ($donnees = $reponse->fetch())
{
	echo htmlspecialchars($donnees['pseudo']) . htmlspecialchars($donnees['message']). '<br />';
}

$reponse->closeCursor();

?>