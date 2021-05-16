<?php

if(isset($_POST['login'])){
	$email = $_POST['email'];
	$sifre = $_POST['sifre'];

	if($email == "" || $sifre ==""){
		$sel_user = "select * from uyeler where email='$email' AND sifre='$sifre'";
		$run_user = mysqli_query($con, $sel_user);
		$check_user = mysqli_num_rows($run_user);
		if($check_user == 0)
		{
		echo "<script>alert('Yanlış Veya Eksik Bilgi Girişi!')</script>";
		
		}
		else{
		$_SESSION['email']=$email;

		header('location:index.php?sk=4');
		}
	}
}
	
?>