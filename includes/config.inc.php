<?php
$ablakcim = array(
    'cim' => 'Átlátszónet',
);

$fejlec = array(
    'kepforras' => './kepek/header.jpg',
    'kepalt' => 'logo',
	'cim' => 'Az Átlászónet Alapítvány hivatalos oldala',
	
    
);
$lablec = array(
    'copyright' => 'Átlászónet Alapítvány '.date("Y").'.',
    'kepforras' => './kepek/header.jpg'
);

$oldalak = array(
	'/' => array('fajl' => 'cimlap', 'szoveg' => 'KEZDŐLAP', 'menun'=>array(1,1)),
    'azadombol' => array('fajl' => 'ado', 'szoveg' => '#AZADOMBOL','menun'=>array(1,1)),
    'Galeria' => array('fajl' => 'galéria', 'szoveg' => 'GALERIA','menun'=>array(1,1)),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'KAPCSOLAT','menun'=>array(1,1)),
    'Belepes' => array('fajl' => 'belep', 'szoveg' => 'BELÉPÉS','menun'=>array(1,1)),
    'tablazat' => array('fajl' => 'tablazat', 'szoveg' => 'TABLAZAT','menun'=>array(1,1)),
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');

?>
<?php
    $MAPPA = './kepek/';
    $TIPUSOK = array ('.jpg', '.png');
    $MEDIATIPUSOK = array('image/jpeg', 'image/png');
    $DATUMFORMA = "Y.m.d. H:i";
    $MAXMERET = 500*1024;
?>