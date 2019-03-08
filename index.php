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
	header('location:tujuan2.php');
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
<form action="tujuan2.php" method="POST">
<table class="table" align="center">
<tr>
	<th colspan=2><center><h1>Log In</h1>
	<tr><td><hr class="star-primary">
<tr>
	<th><center><input type="text" name="nim" placeholder="NIM">
<tr> 
	<th><center><input type="password" name="pass" placeholder="Password">
<tr> 
	<th><center><button type="submit" class="btn btn-success btn-lg" style="padding: 10px 50px 10px 50px">Masuk</button> 
	<tr><td><hr class="star-primary">
</form>
<tr>
<form action="signup.php">
	<th><center>Belum Punya Akun? <a href="signup.php"> Daftar </a>
</table>
</form>

<?php
error_reporting(0);
		$konfirmasi = $_GET[m];
		if ($konfirmasi == "kosong") {
			echo'<script>alert("Isikan Sesuatu");
			</script>';}
		elseif($konfirmasi=="ukosong"){
			echo'<script>alert("Isikan Email");
			</script>';}
		elseif($konfirmasi=="pkosong"){
			echo'<script>alert("Isikan Password");
			</script>';}
		elseif($konfirmasi=="salah"){
			echo'<script>alert("NIM dan Password Tidak Cocok!");
			</script>';}
}
?>
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
