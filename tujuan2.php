<?php

session_start();
if(!(empty($_SESSION["admin"]))){
	echo "<script language=javascript>document.location.href='profil.php?id=$_SESSION[admin]';</script>";
} else {
error_reporting(0);
include "connect.php";

$nim = $_POST['nim'];
$password = $_POST['pass'];

if ($nim== null && $password== null){
	header('location: index.php?m=kosong');
}
elseif ($nim == null && $password != null){
	header('location: index.php?m=ukosong');
}
elseif($nim!= null && $password== null){
	header('location: index.php?m=pkosong');
}
else{
	$user  = mysql_query("SELECT * FROM anggota WHERE NIM='$nim' AND Password='$password'");
	$row=mysql_fetch_array($user);
	$match = mysql_num_rows($user);
	if ($match==1){
		$_SESSION["admin"] = $row['NIM'];
		$_SESSION["chat"] = $row['Nama Lengkap'];
		$pos    = $row['Posisi'];
		$matkul = $row['Matkul'];
		$_SESSION["posisi"] = $pos;
		$_SESSION["matkul"] = $matkul;
		
		echo "<script language=javascript>alert('Selamat Datang!');document.location.href='profil.php?id=$_SESSION[admin]';</script>"; 
	} else {
		header('location: index.php?m=salah');    
	}
}
}
?>