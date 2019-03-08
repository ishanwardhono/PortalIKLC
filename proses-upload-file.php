<?php
session_start();
if(empty($_SESSION["admin"])){
	header('location:index.php');
} else {
$admin  = "$_SESSION[admin]";
$matkul = "$_SESSION[matkul]";
	include "connect.php";
$ket = "$_POST[ket]";
$sumber = $_FILES['userfile']['tmp_name'];  
$target = $_FILES['userfile']['name'];  
$uploaddir='./news/';  
$namfile = "$matkul-$target";
$alamatfile=$uploaddir.$namfile;
  
if(move_uploaded_file($sumber, $alamatfile))  
{  
$query = mysql_query("INSERT INTO `news`(`Matkul`, `File`, `Keterangan`) VALUES ('$matkul','$namfile','$ket')");
echo "<script>alert('Data Berhasil Diinput')
    location.replace('news.php')</script>";
 }  
else   {
echo "<script>alert('Data Gagal Diupload')
    location.replace('news.php')</script>";
 }
}
?>