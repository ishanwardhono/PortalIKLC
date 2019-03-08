<?php
session_start();
if(empty($_SESSION["admin"])){
	header('location:index.php');
} else {
include"connect.php";

$id= $_GET['id'];
$nim = "$_SESSION[admin]";
$query="DELETE from anggota where id='$id'";
$exe=mysql_query($query);
 
if ($exe)
{
	$query1="DELETE from nilai where NIM='$nim'";
	$exe1=mysql_query($query1);
	session_destroy();
    echo "<script>alert('Data Berhasil Dihapus')
    location.replace('index.php')</script>";
}
else
{
    echo "<script>alert('Data Gagal Dihapus')
    location.replace('index.php')</script>";
}}
?>