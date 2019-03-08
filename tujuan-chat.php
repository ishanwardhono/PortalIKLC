<?php
session_start();
if(empty($_SESSION["admin"])){
	header('location:index.php');
} else {
include"connect.php";
$nama    = $_GET['nama'];
$nim     = $_GET['nim'];
$obrol   = "$_POST[obrolan]"; 

include"connect.php";
$query = mysql_query("INSERT INTO `home`(`NIM`, `Nama`, `Obrolan`) VALUES ('$nim','$nama','$obrol')");

if($query)
{
	echo "<script>location.replace('chat.php#bawah')</script>";
}
else
{
    echo "<script>alert('Gagal Memuat Obrolan')
	location.replace('chat.php#bawah')</script>";
}}
?>