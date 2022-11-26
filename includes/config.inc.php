<?php
$ablakcim = array(
    'cim' => 'Átlátszónet',
);

$fejlec = array(
    'kepforras' => 'header.jpg',
    'kepalt' => 'logo',
	'cim' => 'Az Átlászónet Alapítvány hivatalos oldala',
	
    
);
$lablec = array(
    'copyright' => 'Átlászónet Alapítvány '.date("Y").'.',
    'kepforras' => 'header.jpg'
);

$oldalak = array(
	'/' => array('fajl' => 'cimlap', 'szoveg' => 'KEZDŐLAP'),
	
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'KAPCSOLAT'),
	'azadombol' => array('fajl' => 'ado', 'szoveg' => '#AZADOMBOL'),
    'tablazat' => array('fajl' => 'tablazat', 'szoveg' => 'TABLAZAT'),
    'Galeria' => array('fajl' => 'galeria', 'szoveg' => 'GALERIA'),
    'Belepes' => array('fajl' => 'belep', 'szoveg' => 'BELÉPÉS'),
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