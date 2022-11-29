<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kapcsolat</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
    <h1>Kapcsolat</h1>
    <form name="kapcsolat" action="php/kapcsolat.php" onsubmit="return ellenoriz();" method="post">
        <div>
        Név (minimum 5 karakter): <input type="text" id="nev" name="nev" size="20" maxlength="40">
            <br/>
            <br>
        E-mail (kötelező): <input type="text" id="email" name="email" size="30" maxlength="40">
            <br/>
            <br>
        <textarea id="szoveg" name="szoveg" cols="40" rows="10" placeholder="Üzenet (kötelező): "></textarea></label>
            <br/>
            <br>
            <input id="kuld" type="submit" value="Küld">
            <button onclick="ellenoriz();" type="button">Ellenőriz</button>
        </div>
    </form>

</body>
</html>
