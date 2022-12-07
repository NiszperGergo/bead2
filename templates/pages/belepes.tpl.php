 <h3>Regisztrálja magát, ha még nem felhasználó!</h2>
  
 <form action = "?oldal=regisztral" method = "post">
      <fieldset class="reg">
        <legend>Regisztráció</legend>
        <br>
        <input class="veznev" type="text" name="vezeteknev" placeholder="vezetéknév" required><br><br>
        <input class="utonev"type="text" name="utonev" placeholder="utónév" required><br><br>
        <input class="fhnev" type="text" name="felhasznalo" placeholder="felhasználói név" required><br><br>
        <input class="psw"  type="password" name="jelszo" placeholder="jelszó" required><br><br>
        <input class="login-box" type="submit" name="regisztracio" value="Regisztráció">
        <br>&nbsp;
      </fieldset>
    </form>
<form action = "?oldal=belep" method = "post">
      <fieldset class="login">
        <legend>Bejelentkezés</legend>
        <br>
        <input  class="fhnev" type="text" name="felhasznalo" placeholder="felhasználó" required><br><br>
        <input  class="psw" type="password" name="jelszo" placeholder="jelszó" required><br><br>
        <input class="login-box" type="submit" name="belepes" value="Belépés">
        <br>&nbsp;
      </fieldset>
    </form>
 