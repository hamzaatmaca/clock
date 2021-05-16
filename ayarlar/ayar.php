<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","saat");

if($con){
	/*echo "Bağlantı Kuruldu";*/
}
if(mysqli_connect_errno()){
	/*echo "Bağlantı Hatası".mysqli_connect_errno();*/
}
/*ZAMAN*/
$time=time();
/*IP ADRESİ*/
$ip=$_SERVER["REMOTE_ADDR"];
/*SİTE AYARLARI*/

$site_ayar = "SELECT * FROM ayarlar";
$run_site_ayar = mysqli_query($con,$site_ayar);
while($row_site_ayar=mysqli_fetch_array($run_site_ayar))
{
	$id = $row_site_ayar['id'];
	$site_title = $row_site_ayar['site_title'];
	$site_desc = $row_site_ayar['site_desc'];
	$site_keyw = $row_site_ayar['site_keyw'];
	$site_copyr = $row_site_ayar['site_copyr'];
	$site_face = $row_site_ayar['site_face'];
	$site_twit = $row_site_ayar['site_twit'];
	$site_link = $row_site_ayar['site_link'];
	$site_inst = $row_site_ayar['site_inst'];
	$site_youtube = $row_site_ayar['site_youtube'];
}


/* KULLANICI SORGUSU*/
if(isset($_SESSION["Kullanici"])){
	$kullanicisorgusu = mysqli_query("SELECT * FROM uyeler WHERE email =".$_SESSION["Kullanici"]." LIMIT 1");
while ($row_kullanicisorgusu = mysqli_fetch_array($kullanicisorgusu)) {
	$kullaniciId = $Kullanici["id"];
	$isim = $Kullanici["isim"];
	$soyisim = $Kullanici["soyisim"];
	$email = $Kullanici["email"];
	$sifre = $Kullanici["sifre"];
	$telefon = $Kullanici["telefon"];
	$durum = $Kullanici["durum"];
	$kayittarihi = $Kullanici["kayittarihi"];
	$kayitip = $Kullanici["kayitip"];
	$aktivasyon = $Kullanici["aktivasyon"];
}
}




?>