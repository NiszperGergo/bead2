<?php
$ablakcim = array(
    'cim' => 'Átlátszónet',
);

$fejlec = array(
    'kepforras' => '/header.jpg',
    'kepalt' => 'logo',
	'cim' => 'Az Átlászónet Alapítvány hivatalos oldala',
	
    
);
$lablec = array(
    'copyright' => '<a href="https://atlatszonet.hu" target="blank">Átlászónet Alapítvány</a> '.date("Y").'.',
    'kepforras' => './kepek/header.jpg',
    
);

$oldalak = array(
	'/' => array('fajl' => 'cimlap', 'szoveg' => 'KEZDŐLAP', 'menun'=>array(1,1)),
    'azadombol' => array('fajl' => 'ado', 'szoveg' => '#AZADOMBOL','menun'=>array(1,1)),
    'galeria' => array('fajl' => 'galeria', 'szoveg' => 'GALERIA','menun'=>array(1,1)),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'KAPCSOLAT','menun'=>array(1,1)),
    'uzenet' => array('fajl' => 'uzenet', 'szoveg' => 'ÜZENETEK','menun'=>array(1,1)),
    'elkuld' => array('fajl' => 'elkuld', 'szoveg' => '', 'menun' => array(0,0)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'BELÉPÉS','menun'=>array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'KILÉPÉS','menun'=>array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '','menun'=>array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '','menun'=>array(0,0)),
   
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