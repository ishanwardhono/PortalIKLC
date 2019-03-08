<?php
session_start();
if(empty($_SESSION["admin"])){
	header('location:index.php');
} else {
$admin = "$_SESSION[admin]";
	
	include "connect.php";
		$query = "SELECT * FROM `anggota` Where NIM='$admin'";
		$exe = mysql_query($query);
		$row = mysql_fetch_assoc($exe);
		
		$nim  = $row['NIM'];
		$nama = $row['Nama Lengkap'];
		$foto = $row['Foto'];

$sumber = $_FILES['userfile']['tmp_name'];  
$target = $_FILES['userfile']['name'];  
$uploaddir='./foto/';  
$namfot = "$nim-$target";
$alamatfile=$uploaddir.$namfot;
  
if(move_uploaded_file($sumber, $alamatfile))  
{  
$query = mysql_query("UPDATE `anggota` SET `Foto`='$nim-$target' WHERE NIM=$admin");
echo "<script>alert('Data Berhasil Diinput')
    location.replace('profil.php?id=$admin')</script>";
 }  
else   {
echo "<script>alert('Data Gagal Diupload')
    location.replace('upload-foto.php')</script>";
 }
}
?>