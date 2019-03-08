<?php
session_start();
if((empty($_SESSION["admin"]))){
	header('location:index.php');
} else {
include"connect.php";
$id    = $_GET['id'];
$pesan   = "$_POST[pesan]"; 
$admin = "$_SESSION[admin]";
$namle = "$_SESSION[chat]";

$sql = "SELECT * FROM `anggota` WHERE NIM='$id'";
$exe = mysql_query($sql);
$row = mysql_fetch_array($exe);
	$nama    = $row['Nama Lengkap'];
	
$query = mysql_query("INSERT INTO `pesan`(`NIM Pengirim`, `Pengirim`, `NIM Penerima`, `Penerima`, `Pesan`)
						VALUES ('$admin','$namle','$id','$nama','$pesan')");

if($query)
{
	echo "<script>location.replace('profil.php?id=$id')</script>";
}
else
{
    echo "<script>alert('Gagal Mengirim Pesan')
	location.replace('profil.php?id=$id')</script>";
}}
?>