<?php
session_start();
if(empty($_SESSION["admin"])){
	header('location:index.php');
} else {
$admin  = "$_SESSION[admin]";
$nama   = "$_SESSION[chat]";

$tgs    = "$_POST[tugas]";
$matkul = "$_POST[matkul]";

	include "connect.php";
	
	$query = "SELECT * FROM `tugas` WHERE `NIM`='$admin' AND `Matkul`='$matkul' AND `Tugas Ke`='$tgs'";
	$exe = mysql_query($query);
	

$sumber = $_FILES['userfile']['tmp_name'];  
$target = $_FILES['userfile']['name'];  
$uploaddir='./tugas/';  
$namfile = "$matkul-$tgs-$admin-$target";
$alamatfile=$uploaddir.$namfile;
  
if(move_uploaded_file($sumber, $alamatfile))  
{  
	if($row = mysql_num_rows($exe)){
		echo "<script>alert('Anda Sudah Mengupload Tugas $matkul ke $tgs. Silahkan Hapus terlebih dahulu, jika ingin mengupload lagi!')
				location.replace('tugas.php')</script>";
	} else {
		$query1 = mysql_query("INSERT INTO `tugas`(`NIM`, `Nama`, `Matkul`, `File`, `Tugas Ke`) VALUES ('$admin','$nama','$matkul','$namfile','$tgs')");
		echo "<script>alert('Data Berhasil Diinput')
				location.replace('tugas.php')</script>";
	}
 }  
else   {
echo "<script>alert('Data Gagal Diupload')
    location.replace('tugas.php')</script>";
 }
}
?>