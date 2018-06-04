<?php
	
$chaine = "soleil";
	function chiffrer($alphabet,$crypt) {
			//$chaine = "soleil";
			$alphabet="abcdefghijklmnopqrstuvwxyz";
			$crypt;
		

		for ($i=0; $i < strlen($chaine); $i++) {
			for ($j=0; $j < strlen($alphabet); $j++) {
				//echo $alphabet[$j];

				//la condition de comparaison
				if ($chaine[$i] == $alphabet[$j]) {

					// Ca c'est l'instruction une fois comparé 
					//$alphabet[$j+3] est le décallage demandé
					$crypt = $alphabet[$j+3];
					echo $crypt;
					;
				} 
							
			}
		}
	}
	echo "le mot : ";
chiffrer($chaine);
?>


<!-- <form action="chiffrecesar1.php" method="post">
  <input type="text" name="chaine"><br>
  <input type="number" name="crypt" min="0" max="5"><br>
  <input type="submit" value="Crypter">
</form>
 -->
<?php





?>