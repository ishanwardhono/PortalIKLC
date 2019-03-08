
<?php
session_start();
if(empty($_SESSION["admin"])){
	header('location:index.php');
} else {
include"connect.php";
$admin   = "$_SESSION[admin]";
$notes   = "$_POST[notes]";
 
$query = mysql_query("UPDATE `anggota` SET `Notes`='$notes' WHERE `NIM`='$admin'");

if($query)
{
	
	echo "<script>
    location.replace('profil.php?id=$admin')</script>";
}
else
{
    echo "<script>
	location.replace('profil.php?id=$admin')</script>";
}
}
?>