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
   
<form class='login-box' onsubmit='return ellenoriz();' method='post' action='?oldal=elkuld'>
       <div class='textbox2'>
<label>Email:</label> <input id='email' name='email' type='text' placeholder='E-mail'>
       </div>
       <br>
<div class='textbox2'>
Tárgy: <input id="subject" name='subject' type='text' placeholder='Tárgy'>
</div>
 <div class='textbox'>
<br>
Üzenet:<br> <textarea id='message' name='message' rows='15' cols='40' ></textarea>
</div><br>
<div>
<input class='btn2' id='kuld' type='submit' value='Küld'>
<button class='btn2' onclick='ellenoriz();' type='button'>Ellenőriz</button>
</div>
</form>


</body>
</html>
