<?php
session_start();
if((empty($_SESSION["admin"]))){
	header('location:index.php');
} else {
	$admin = "$_SESSION[admin]";
	$name = "$_SESSION[chat]";
	$pos = "$_SESSION[posisi]";
	$matkul = "$_SESSION[matkul]";
	include"connect.php";
		$id=$_GET['id'];
		$query=mysql_query("SELECT * FROM anggota WHERE id='$id'") or die (mysql_error());
		while($row=mysql_fetch_assoc($query)){
			$nim    = $row['NIM'];
			$namle  = $row['Nama Lengkap'];
			$nampa  = $row['Nama Panggilan'];
			$tgl    = $row['Tanggal Lahir'];
			$email  = $row['Email'];
			$pass   = $row['Password'];
			}
			
?>
<!DOCTYPE html>
<html>

<head>
    <title>LAB 8</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body id="page-top" class="index">
	<br><br><br>
	
	 <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand" style="padding: 10px 0px 10px 0px">Portal LAB 8<br><?php echo $admin ?></div>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right menu">
                    <li class="page-scroll">
                        <a href="news.php">Beranda</a>
                    </li>
                    <li class="page-scroll">
                        <a href="chat.php">Obrolan</a>
                    </li>
                    <li class="page-scroll">
                        <a href="anggota.php">Anggota</a>
                    </li>
					  <li class="page-scroll">
                        <a href="tugas.php">Tugas</a>
                    </li>
                    <li class="page-scroll">
                        <a href="nilai.php">Nilai</a>
                    </li>
                    <li class="page-scroll">
                        <a href="pesan.php">Pesan</a>
                    </li>
					<li class="page-scroll">
                        <a href="profil.php?id=<?php echo $admin ?>">Profil</a>
					</li>
					<li class="page-scroll">
                        <a href="keluar.php">Keluar</a>
					</li>
                </ul>
            </div>
        </div>
    </nav>
	
<form action="proses-update.php?id=<?php echo $id ?>" method="POST">
<table class="table">
	<tr>
		<td><p>NIM</td>
		<td><input type="text" name="nim" value=<?php echo $nim ?> required></td>
	</tr>
	<tr>
		<td><p>Nama Lengkap</td>
		<td><input type="text" name="namle" value=<?php print"$namle" ?> required></td>
	</tr>
	<tr>
		<td><p>Nama Panggilan</td>
		<td><input type="text" name="nampa" value=<?php echo $nampa ?> required></td>
	</tr>
	<tr>
		<td><p>Tanggal Lahir</td>
		<td><input type="date" name="tgl" value=<?php echo $tgl ?> required></td>
	</tr>
	<tr>
		<td><p>Password</td>
		<td><input type="password" name="pass" value=<?php echo $pass ?> required></td>
	</tr>
	<tr>
		<td><p>Match Password</td>
		<td><input type="password" name="matchpass" value=<?php echo $pass ?> required></td>
	</tr>
	<tr>
		<td><input type="submit" value="Kirim">
</table>
</form>
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>