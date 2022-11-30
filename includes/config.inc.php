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
	'/' => array('fajl' => 'cimlap', 'szoveg' => 'KEZDŐLAP'),
    'azadombol' => array('fajl' => 'ado', 'szoveg' => '#AZADOMBOL'),
    'Galeria' => array('fajl' => 'galéria', 'szoveg' => 'GALERIA'),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'KAPCSOLAT'),
    'Belepes' => array('fajl' => 'belep', 'szoveg' => 'BELÉPÉS'),
    'tablazat' => array('fajl' => 'tablazat', 'szoveg' => 'TABLAZAT'),
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