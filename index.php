<?php
include('ayarlar/ayar.php');
include('ayarlar/sayfalar.php');
include('ayarlar/guvenlik.php');
if(isset($_REQUEST["sk"])){
	$sayfa_no = filtre($_REQUEST["sk"]);
}
else
{
	$sayfa_no = 0;
}
?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>	
	<title>zerO'clock</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset= UTF-8">
	<meta name="robots" content="all">
	<meta name="author" content="MentalKod">
	<meta name="description" content="E-Ticaret Arayüz Scripti">
	<meta name="keywords" content="E-Ticaret">
	<link rel="stylesheet" type="text/css" href="css/saat.css">
	<link rel="stylesheet" type="text/css" href="css/media.css">
	<script src="https://kit.fontawesome.com/5b17f452e4.js" crossorigin="anonymous"></script>
</head>
<body>
	<!-- NAVBAR BÖLÜMÜ -->
	<nav>
		<div class="generalnav">
			<div id="topnav">
				<div id="littletopnav">
					<div id="logo"><a href="index.php"><img src="resimler/logo.png"></a></div>
					<div id="in"><input type="search" placeholder="Arama Yap"><button><i class="fas fa-search"></i></button></div>
					<div id="membersshop">
						<div class="m" id="members">
							<a href="index.php?sk=29">
								<i class="fas fa-user-friends"></i>&nbsp
								<span id="uye" class="members">Üye Girişi</span>
							</a>
						</div>
						<div class="m" id="members">
							<a href="index.php?sk=17">
								<i class="fas fa-user-plus"></i>&nbsp
								<span id="uye" class="members">Kayıt Ol</span>
							</a>
						</div>
						<div class="m" id="shop">
							<i class="fas fa-cart-arrow-down"></i>&nbsp
							<span id="sepet" class="members">Sepet</span>
						</div>
					</div>
				</div>
			</div>
			<div id="bottomnav">
				<div id="links">
					<ul>
						<li><a href="index.php?sk=7">Kadın Saatleri</a></li>
						<li><a href="index.php?sk=6">Erkek Saatleri</a></li>					
						<li><a href="index.php?sk=8">Markalar</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<!-- NAVBAR BÖLÜMÜ BİTİŞ -->

	<!-- MAIN BAŞLANGIÇ -->
	<main>
	<?php
		if((!$sayfa_no) or ($sayfa_no== "") or ($sayfa_no == 0)){
		
	?>
		<div id="slidebar">
			<img class="image" src="resimler/saat1.jpg">
			<img class="image" src="resimler/saat2.jpg">
			<img class="image" src="resimler/saat3.jpg">
			<img class="image" src="resimler/saat4.jpg">
		</div>
		<div id="indirim">
			<div id="indirimyazisi">
				İndirimde Olan Ürünler
			</div>
			<div id="urunkatalog">
				<div class="uruncart">
					<img src="resimler/urun1.jpg">
					<span class="urunyazi">Erkek Kol Saati  Askeri Stil Paslanmaz &nbsp<span class="fiyat">1455TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun2.jpg">
					<span class="urunyazi">Sportif Casio  Sportif Stil Paslanmaz &nbsp<span class="fiyat">1790TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun3.jpg">
					<span class="urunyazi">Klasik Erkek Kol Saati Quartz &nbsp<span class="fiyat">875TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun4.jpg">
					<span class="urunyazi">Memur Tipi Kol Saati Paslanmaz &nbsp<span class="fiyat">2050TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun5.jpg">
					<span class="urunyazi">Altın Kaplama Kol Saati Paslanmaz&nbsp<span class="fiyat">9300TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun6.jpg">
					<span class="urunyazi">Gümüş Kol Saati Quartz Sade Stil &nbsp<span class="fiyat">5670TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun7.jpg">
					<span class="urunyazi">Beyaz Kol Saati Quartz Sade Stil &nbsp<span class="fiyat">1200TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun8.jpg">
					<span class="urunyazi">Sportif Kol Saati Quartz Sporcu Stil &nbsp<span class="fiyat">1550TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun9.jpg">
					<span class="urunyazi">Kırmızı Kol Saati Öğrenci Stil  &nbsp<span class="fiyat">1430TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun10.jpg">
					<span class="urunyazi">Yeşil  Quartz Patron Stil Paslanmaz &nbsp<span class="fiyat">3000TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun11.jpg">
					<span class="urunyazi">Erkek Kol Saati Quartz Askeri Stil  &nbsp<span class="fiyat">2000TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun12.jpg">
					<span class="urunyazi">Dayanıklı Kol Saati Sade Stil  &nbsp<span class="fiyat">1640TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun1.jpg">
					<span class="urunyazi">Erkek Kol Saati  Askeri Stil Paslanmaz &nbsp<span class="fiyat">1455TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun2.jpg">
					<span class="urunyazi">Sportif Casio  Sportif Stil Paslanmaz &nbsp<span class="fiyat">1790TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun3.jpg">
					<span class="urunyazi">Klasik Erkek Kol Saati Quartz &nbsp<span class="fiyat">875TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun4.jpg">
					<span class="urunyazi">Memur Tipi Kol Saati Paslanmaz &nbsp<span class="fiyat">2050TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun5.jpg">
					<span class="urunyazi">Altın Kaplama Kol Saati Paslanmaz&nbsp<span class="fiyat">9300TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun6.jpg">
					<span class="urunyazi">Gümüş Kol Saati Quartz Sade Stil &nbsp<span class="fiyat">5670TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun7.jpg">
					<span class="urunyazi">Beyaz Kol Saati Quartz Sade Stil &nbsp<span class="fiyat">1200TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun8.jpg">
					<span class="urunyazi">Sportif Kol Saati Quartz Sporcu Stil &nbsp<span class="fiyat">1550TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun9.jpg">
					<span class="urunyazi">Kırmızı Kol Saati Öğrenci Stil  &nbsp<span class="fiyat">1430TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun10.jpg">
					<span class="urunyazi">Yeşil  Quartz Patron Stil Paslanmaz &nbsp<span class="fiyat">3000TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun11.jpg">
					<span class="urunyazi">Erkek Kol Saati Quartz Askeri Stil  &nbsp<span class="fiyat">2000TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun12.jpg">
					<span class="urunyazi">Dayanıklı Kol Saati Sade Stil  &nbsp<span class="fiyat">1640TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun1.jpg">
					<span class="urunyazi">Erkek Kol Saati  Askeri Stil Paslanmaz &nbsp<span class="fiyat">1455TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun2.jpg">
					<span class="urunyazi">Sportif Casio  Sportif Stil Paslanmaz &nbsp<span class="fiyat">1790TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun3.jpg">
					<span class="urunyazi">Klasik Erkek Kol Saati Quartz &nbsp<span class="fiyat">875TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun4.jpg">
					<span class="urunyazi">Memur Tipi Kol Saati Paslanmaz &nbsp<span class="fiyat">2050TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun5.jpg">
					<span class="urunyazi">Altın Kaplama Kol Saati Paslanmaz&nbsp<span class="fiyat">9300TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun6.jpg">
					<span class="urunyazi">Gümüş Kol Saati Quartz Sade Stil &nbsp<span class="fiyat">5670TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun7.jpg">
					<span class="urunyazi">Beyaz Kol Saati Quartz Sade Stil &nbsp<span class="fiyat">1200TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun8.jpg">
					<span class="urunyazi">Sportif Kol Saati Quartz Sporcu Stil &nbsp<span class="fiyat">1550TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun9.jpg">
					<span class="urunyazi">Kırmızı Kol Saati Öğrenci Stil  &nbsp<span class="fiyat">1430TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun10.jpg">
					<span class="urunyazi">Yeşil  Quartz Patron Stil Paslanmaz &nbsp<span class="fiyat">3000TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun11.jpg">
					<span class="urunyazi">Erkek Kol Saati Quartz Askeri Stil  &nbsp<span class="fiyat">2000TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun12.jpg">
					<span class="urunyazi">Dayanıklı Kol Saati Sade Stil  &nbsp<span class="fiyat">1640TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun1.jpg">
					<span class="urunyazi">Erkek Kol Saati  Askeri Stil Paslanmaz &nbsp<span class="fiyat">1455TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun2.jpg">
					<span class="urunyazi">Sportif Casio  Sportif Stil Paslanmaz &nbsp<span class="fiyat">1790TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun3.jpg">
					<span class="urunyazi">Klasik Erkek Kol Saati Quartz &nbsp<span class="fiyat">875TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun4.jpg">
					<span class="urunyazi">Memur Tipi Kol Saati Paslanmaz &nbsp<span class="fiyat">2050TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun5.jpg">
					<span class="urunyazi">Altın Kaplama Kol Saati Paslanmaz&nbsp<span class="fiyat">9300TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun6.jpg">
					<span class="urunyazi">Gümüş Kol Saati Quartz Sade Stil &nbsp<span class="fiyat">5670TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun7.jpg">
					<span class="urunyazi">Beyaz Kol Saati Quartz Sade Stil &nbsp<span class="fiyat">1200TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun8.jpg">
					<span class="urunyazi">Sportif Kol Saati Quartz Sporcu Stil &nbsp<span class="fiyat">1550TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun9.jpg">
					<span class="urunyazi">Kırmızı Kol Saati Öğrenci Stil  &nbsp<span class="fiyat">1430TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun10.jpg">
					<span class="urunyazi">Yeşil  Quartz Patron Stil Paslanmaz &nbsp<span class="fiyat">3000TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun11.jpg">
					<span class="urunyazi">Erkek Kol Saati Quartz Askeri Stil  &nbsp<span class="fiyat">2000TL</span></span> 
				</div>
				<div class="uruncart">
					<img src="resimler/urun12.jpg">
					<span class="urunyazi">Dayanıklı Kol Saati Sade Stil  &nbsp<span class="fiyat">1640TL</span></span> 
				</div>
			</div>
		</div>
	</main>
	<?php

		}
	else
	{
		include($Sayfa[$sayfa_no]);
	}
	?>
	<!-- MAIN BİTİŞ -->

	<!-- FOOTER BAŞLANGIÇ -->
	<footer>
		<div id="genelfooter">
			<div class="section" id="kurumsal">
				<ul>
					<li><a href="index.php?sk=1">Kurumsal</a></li>
					<li><a href="index.php?sk=2">Hakkımızda</a></li>
					<li><a href="index.php?sk=3">İnsan Kaynakları</a></li>
					<li><a href="index.php?sk=4">Banka Hesapları</a></li>
					<li><a href="index.php?sk=5">İletişim</a></li>
					
					<li><a href="index.php?sk=6">Erkek Saatleri</a></li>
					<li><a href="index.php?sk=7">Kadın Saatleri</a></li>
					<li><a href="index.php?sk=8">Markalar</a></li>
					
					<li><a href="index.php?sk=9">Kurumsal Satış</a></li>
					<li><a href="index.php?sk=10">Teknik Destek</a></li>
					<li><a href="index.php?sk=11">Kişisel Verilerin Korunması</a></li>
					<li><a href="index.php?sk=12">Gizlilik Sözleşmesi</a></li>
					<li><a href="index.php?sk=13">İade ve Değişim</a></li>
					<li><a href="index.php?sk=14">Kullanım Koşulları</a></li>
					<li><a href="index.php?sk=15">Avantajlar Ve Kolaylıklar</a></li>
					<li><a href="index.php?sk=16">Kargom Nerede</a></li>
			
					<li><a href="https://facebook.com"target="_blank">Facebook</a></li>
					<li><a href="https://twitter.com"target="_blank">Twitter</a></li>
					<li><a href="https://instagram.com"target="_blank">Instagram</a></li>
					<li><a href="https://youtube.com"target="_blank">Youtube</a></li>
					<li><a href="https://linkedin.com" target="_blank">Linkedin</a></li>
				</ul>
			</div>
			<div id="banka">
				<img src="resimler/mastercard.png">
				<img src="resimler/paraf.png">
				<img src="resimler/axess.png">
				<img src="resimler/ziraat.png">
				<img src="resimler/vakif.png">
				<img src="resimler/qnb.png">
				<img src="resimler/paypal.webp">
				<img src="resimler/3dsecure.png">
			</div>
			<div id="copy">
			Copyright © 2020 MentalKod.com. Tüm Hakları Saklıdır.
			</div>
		</div>
	</footer>
	<!-- FOOTER BİTİŞ -->

<script type="text/javascript" src=js/saat.js></script>
</body>
</html>
<?php
mysqli_close($con);
?>

