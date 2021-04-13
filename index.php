<?php
include 'classes.php';

$oZapIvan = new Nastavnik("Ivan","Horvat", "93453164097");
$oZapIvan->Hello();
$oZapIvan->ProvjeriOIB();
$oZapIvan->Radi();

$oZapMirko = new StrucnaSluzba("Mirko", "Mirkic", "39823648623");
$oZapMirko->Radi();
$oZapSlavko = new Nastavnik("Slavko", "Slavkic", "14897823657");


$oZapPrazan = new Nastavnik();
var_dump($oZapPrazan);


$oAsis = new Asistent("Mirko", "Mirkic", "39823648623");
$oAsis->DrziNastavu();

?>