<?php
	session_start();
if(!(empty($_SESSION["admin"]))){
	header('location:index.php');
} else {
	//var_dump($_POST);
	$nim="$_POST[nim]";
	$namle="$_POST[namle]";
	$nampa="$_POST[nampa]";
	$tgl="$_POST[tgl]";
	$email="$_POST[email]";
	$pass="$_POST[pass]";
	$matchpass="$_POST[matchpass]";
	
	if($pass != $matchpass)
		{echo"<script>alert('Password Tidak Cocok!'); document.location.href='signup.php';</script>";}
	else{
			include"connect.php";
			$query = mysql_query ("INSERT INTO `anggota`(`NIM`, `Nama Lengkap`, `Nama Panggilan`, `Tanggal Lahir`, `Email`, `Password`) 
									VALUES ('$nim','$namle','$nampa','$tgl','$email','$pass')");
			
			if($query)
			{
				$user  = mysql_query("SELECT * FROM anggota WHERE NIM='$nim' AND Password='$pass'");
				$row=mysql_fetch_array($user);
				$match = mysql_num_rows($user);
				
					$_SESSION["admin"] = $row['NIM'];
					$_SESSION["chat"] = $row['Nama Lengkap'];
					$pos    = $row['Posisi'];
					$matkul = $row['Matkul'];
					$_SESSION["posisi"] = $pos;
					$_SESSION["matkul"] = $matkul;
				
				echo "<script language=javascript>alert('Selamat Bergabung!');document.location.href='upload-foto.php';</script>";
			} else {
		echo "<script language=javascript>alert('Gagal!');document.location.href='signup.php';</script>";  
		}
	}
}
?>