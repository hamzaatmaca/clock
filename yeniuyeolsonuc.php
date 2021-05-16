<?php
if(isset($_POST["isim"])){
	$gelenisim = $_POST["isim"];
}else{
	$gelenisim ="";
}
if(isset($_POST["soyisim"])){
	$gelensoyisim = $_POST["soyisim"];
}else{
	$gelensoyisim ="";
}
if(isset($_POST["email"])){
	$gelenemail = $_POST["email"];
}else{
	$gelenemail ="";
}
if(isset($_POST["sifre"])){
	$gelensifre = $_POST["sifre"];
}else{
	$gelensifre ="";
}
if(isset($_POST["telefon"])){
	$gelentelefon = $_POST["telefon"];
}else{
	$gelentelefon ="";
}
if(isset($_POST["onay"])){
	$gelenonay = $_POST["onay"];
}else{
	$gelenonay ="";
}


$md=md5($gelensifre);


if(($gelenisim!="") and ($gelensoyisim!="") and ($gelenemail!="") and ($gelensifre!="")and ($gelentelefon!="")){

if($gelenonay == 0){
	header("Location:index.php?sk=24");
	exit();
}else{
	 $kontrol = mysqli_query($con,"SELECT * FROM uyeler WHERE email ='$gelenemail' LIMIT 1");
	 $num_rows =mysqli_num_rows($kontrol);
	 if($num_rows>0){
	 	header("Location:index.php?sk=22");
	 	exit();
	 }
	 else{
	 	$ekle = " INSERT INTO uyeler(isim,soyisim,email,sifre,telefon,durum,kayittarihi,kayitip) values('$gelenisim','$gelensoyisim','$gelenemail','$md','$gelentelefon','0','$time','$ip')";
	 	$kaydet=mysqli_query($con, $ekle);
	 	
	 	if($kaydet){
		header("Location:index.php?sk=19");
		exit();
	
		}
		if(!$kaydet)
		{	

			echo mysqli_error($ekle);

		
		}
	 }
}


}
else{
	header("Location:index.php?sk=21");
	exit();
}
?>