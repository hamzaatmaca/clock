<?php

function rakam($x){
$islem = preg_replace("/[^0-9]/", "", $x);
$sonuc = $islem;
return $sonuc;
}

function filtre($x){
	$Bosluksil = trim($x);
	$TaglariTemizle =strip_tags($Bosluksil);
	$EtkisizYap = htmlspecialchars($TaglariTemizle);
	$SonTemizlik = rakam($EtkisizYap);
	$sonuc = $SonTemizlik;
	return $sonuc;
}
function guvenlik($Deger){
	$BoslukSil = trim($Deger);
	$TaglariTemizle = strip_tags($BoslukSil);
	$EtkisizYap = htmlspecialchars($TaglariTemizle);
	$sonuc = $EtkisizYap;
	return $Sonuc;
}
function turn($x){
	$GeriDondur =htmlspecialchars_decode($x, ENT_QUOTES);
	$sonuc =$GeriDondur;
	return $sonuc;
}

function aktivasyon(){
	$x=rand(10000,99999);
	$y=rand(10000,99999);
	$z=rand(10000,99999);
	$kod=$x."-".$y."-".$z;
	$sonuc = $kod;
	return $sonuc;
}

?>