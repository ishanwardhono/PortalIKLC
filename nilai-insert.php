<?php
session_start();
if(empty($_SESSION["admin"])){
	header('location:index.php');
} else {
	$admin = "$_SESSION[admin]";
	$name = "$_SESSION[chat]";
	$pos = "$_SESSION[posisi]";
	$matkul = "$_SESSION[matkul]";
	
	include "connect.php";
		$query = "SELECT * FROM `anggota` WHERE Posisi='Praktikan'";
		$exe = mysql_query($query);
		while($row = mysql_fetch_assoc($exe))
			{
				$nim    = $row['NIM'];
				$nama   = $row['Nama Lengkap'];
				$nilai  = "$_POST[$nim]";
				
				$insert =  mysql_query ("INSERT INTO `nilai`(`NIM`, `Nama`, `$matkul`) VALUES ('$nim','$nama','$nilai')");
				
				if(!$insert){
					$query = mysql_query("UPDATE `nilai` SET `$matkul`='$nilai' WHERE NIM=$nim");
				}
				
			}
	echo "<script>alert('Nilai Berhasil Diinput')
    location.replace('nilai.php')</script>";
} ?>