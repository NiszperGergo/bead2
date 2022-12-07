<?php
	try {
		// Kapcsolódás
		$pdo = new PDO('mysql:host=localhost;dbname=gyakorlat7', 'root', '',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		$pdo->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
		$utasitas = "Select id, csaladi_nev From felhasznalok Where id<100";
		$eredm = $pdo->query($utasitas);
	}
	catch (PDOException $e) {
		echo "Hiba: ".$e->getMessage();
	}      
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Kiíratás</title>
        <meta charset="utf-8">
		<style>
			table, td, tr {
				border: 1px  solid black;
			}
		</style>
    </head>
    <body>
	<h1>Kiíratás táblázatba</h1>
	<table>
	<?php foreach ($eredm as $sor)
		print "<tr><td>" . $sor['id'] . "</td>"  . " <td>" .$sor['csaladi_nev'] . "</td></tr>";
	?>
	</table>
    </body>  
</html>
