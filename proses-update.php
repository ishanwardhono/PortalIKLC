<!DOCTYPE html>
<html>
<head>
	<title> Database </title>
</head>
<body>
<?php
session_start();
if(empty($_SESSION["admin"])){
	header('location:index.php');
} else {
include"connect.php";
$admin = "$_SESSION[admin]";
$id    = $_GET['id'];
$email = "$_POST[email]";
$nampa = "$_POST[nampa]";
$tgl   = "$_POST[tgl]";
$pass  = "$_POST[pass]";
$mpass = "$_POST[matchpass]";  

if($pass != $mpass)
		{echo"<script>alert('Password Tidak Cocok!'); document.location.href='view-update.php?id=$id';</script>";}
	else{

$query = mysql_query("UPDATE `anggota` SET `Nama Panggilan`='$nampa',`Tanggal Lahir`='$tgl',`Email`='$email',`Password`='$pass' WHERE 	`NIM`=$admin");


if($query)
{
	
	echo "<script>alert('Data Berhasil Diupdate')
    location.replace('profil.php?id=$admin')</script>";
}
else
{
    echo "<script>alert('Data Gagal Diinput')
	location.replace('view-update.php?id=$admin')</script>";
}
}}
?>