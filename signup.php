<!DOCTYPE html>
<html>

<head>
    <title>LAB 8</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body id="page-top" class="index">
<?php
session_start();
if(!(empty($_SESSION["admin"]))){
	echo "<script language=javascript>document.location.href='profil.php?id=$_SESSION[admin]';</script>";
} else {
?>

<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
           <div class="navbar-header page-scroll">
				<center><h1><b><font color="white">Portal LAB 8</font></center></h1></b>
		   </div>
        </div>
    </nav>
<br><br><br>
<center>
<form name="form" action="tujuan.php" method="post">
<table class="table" align="center">
	<tr>
		<th colspan=2><center><h1>Daftar</h1>
	<tr><td colspan=2><hr class="star-primary">
	</tr>
	<tr>
		<th><p>NIM</th>
		<td><input type="text" name="nim" required></td>
	</tr>
	<tr>
		<th><p>Nama Lengkap</th>
		<td><input type="text" name="namle" required></td>
	</tr>
	<tr>
		<th><p>Nama Panggilan</th>
		<td><input type="text" name="nampa" required></td>
	</tr>
	<tr>
		<th><p>Tanggal Lahir</th>
		<td><input type="date" name="tgl" required></td>
	</tr>
	<tr>
		<th><p>Email</th>
		<td><input type="email" name="email" required></td>
	</tr>
	<tr>
		<th><p>Password</th>
		<td><input type="password" name="pass" required></td>
	</tr>
	<tr>
		<th><p>Match Password</th>
		<td><input type="password" name="matchpass" required></td>
	</tr>
	<tr><td colspan=2><hr class="star-primary">
	<tr>
		<th colspan=2>
			<center><button type="submit" class="btn btn-success btn-lg" style="padding: 10px 50px 10px 50px">Daftar</button> 
		</th>
	</tr>
</table>
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>