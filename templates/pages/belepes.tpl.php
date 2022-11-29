<?php
session_start();
if(isset($_POST['felhasznalo']) && isset($_POST['jelszo'])) { 
try {
// Kapcsolódás
$dbh = new PDO('mysql:host=localhost;dbname=reg', 'root', '', 
array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
// Felhsználó keresése
$sqlSelect = "select id, csaladi_nev, uto_nev from felhasznalok where bejelentkezes = 
:bejelentkezes and jelszo = sha1(:jelszo)";
$sth = $dbh->prepare($sqlSelect);
$sth->execute(array(':bejelentkezes' => $_POST['felhasznalo'], ':jelszo' => $_POST['jelszo'])); 
$row = $sth->fetch(PDO::FETCH_ASSOC);
if($row) {
$_SESSION['csn'] = $row['csaladi_nev'];
$_SESSION['un'] = $row['uto_nev'];
// A felhasználónevet a $row tömbből is ki tudnánk olvasni, ha a SELECT-ben lekérdezzük:
// SELECT id, csaladi_nev, uto_nev, bejelentkezes from felhasznalok
// De a $_POST tömbben is benne van, mert beírtuk az űrlapba:
$_SESSION['login'] = $_POST['felhasznalo'];
}
if(isset($row) && !$row){
echo "<h2>A bejelentkezés nem sikerült!</h2>";
session_unset();
}
}
catch (PDOException $e) {
echo "Hiba: ".$e->getMessage();
}
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>MySql</title>
    <meta charset="utf-8">
  </head>
  <body>
    <form action = "belepes.php" method = "post">
      <fieldset>
        <legend>Bejlentkezés</legend>
        <br>
        <input type="text" name="felhasznalo" placeholder="felhasználó" required><br><br>
        <input type="password" name="jelszo" placeholder="jelszó" required><br><br>
        <input type="submit" name="belepes" value="Belépés">
        <br>&nbsp;
      </fieldset>
    </form>
    <h3>Regisztrálja magát, ha még nem felhasználó!</h2>
    <form action = "regisztracio.php" method = "post">
      <fieldset>
        <legend>Regisztráció</legend>
        <br>
        <input type="text" name="vezeteknev" placeholder="vezetéknév" required><br><br>
        <input type="text" name="utonev" placeholder="utónév" required><br><br>
        <input type="text" name="felhasznalo" placeholder="felhasználói név" required><br><br>
        <input type="password" name="jelszo" placeholder="jelszó" required><br><br>
        <input type="submit" name="regisztracio" value="Regisztráció">
        <br>&nbsp;
      </fieldset>
    </form>
  </body>
</html>
