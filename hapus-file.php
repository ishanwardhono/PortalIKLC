<?php
session_start();
if(empty($_SESSION["admin"])){
	header('location:index.php');
} else {
include"connect.php";
$id= $_GET['id'];
$nim = "$_SESSION[admin]";
$query="DELETE from `news` where `File`='$id'";
$exe=mysql_query($query);
 
if ($exe)
{
    echo "<script>alert('Data Berhasil Dihapus')
    location.replace('news.php')</script>";
}
else
{
    echo "<script>alert('Data Gagal Dihapus')
    location.replace('news.php')</script>";
}}
?>