<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Galéria</title>
    <style type="text/css">
        div#galeria {margin: 0 auto; width: 620px;}
        div.kep { display: inline-block; }
        div.kep img { width: 200px; }
    </style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="container">
        <div class="row">
            <div class="content-area">
    <div id="galeria">
    
    <?php
    arsort($kepek);
    foreach($kepek as $fajl => $datum)
    {
    ?>
        <div class="kep">
            <a href="<?php echo $MAPPA.$fajl ?>">
                <img src="<?php echo $MAPPA.$fajl ?>">
            </a>
            <p>Név:  <?php echo $fajl; ?></p>
            <p>Dátum:  <?php echo date($DATUMFORMA, $datum); ?></p>
        </div>
    <?php
    }
    ?>
    </div>

    <h1>Feltöltés a galériába:</h1>
<?php
    if (!empty($uzenet))
    {
        echo '<ul>';
        foreach($uzenet as $u)
            echo "<li>$u</li>";
        echo '</ul>';
    }
?>
    <form action="?oldal=galeria" method="post" enctype="multipart/form-data">
    <input  type="hidden" name="max_file_size" value="110000">


       <label for="file-upload" class="custom-file-upload">Fájlok kiválasztása
       <input  id="file-upload" type="file" name="fajlok[]" accept="image/png, image/jpeg" multiple required>
   </label>
   <input class="btn3" type="submit" name="kuld">
      </form>
</div>
</div>
</div>
</body>
</html>