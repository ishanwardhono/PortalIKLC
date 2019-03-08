<?php
session_start();
if(empty($_SESSION["admin"])){
	header('location:index.php');
} else {
	//var_dump($_POST);
	include"connect.php";
	$admin = "$_SESSION[admin]";
	$name = "$_SESSION[chat]";
	$pos = "$_SESSION[posisi]";
	$matkul = "$_SESSION[matkul]";
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
                        <a href="chat.php#bawah">Obrolan</a>
                    </li>
					  <li class="page-scroll">
                        <a href="tugas.php">Tugas</a>
                    </li>
                    <li class="page-scroll">
                        <a href="nilai.php">Nilai</a>
                    </li>
					<li class="page-scroll">
                        <a href="anggota.php">Anggota</a>
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
	<br>
			
				 
				
					
					<?php
				include "connect.php";
				echo"<h1><center>Asisten</h1></center>";
				echo'<table class="table" align="center" width=90%>
				<tr bgcolor=cccccc><th><center>No<th><center>NIM<th><center>Nama Lengkap<th><center>Mata Kuliah<th><center>Tanggal Lahir<th><center>Email<th><center>Foto';
					$query = "SELECT * FROM `anggota` Where Posisi='Asisten' ORDER BY `anggota`.`NIM` ASC";
					$exe = mysql_query($query);
					
					$no = 1;
					while($row = mysql_fetch_assoc($exe))
					{
						$nim    = $row['NIM'];
						$namle  = $row['Nama Lengkap'];
						$nampa  = $row['Nama Panggilan'];
						$tgl    = $row['Tanggal Lahir'];
						$email  = $row['Email'];
						$foto   = $row['Foto'];
						$mk		= $row['Matkul'];
					echo"<tr><th><a style='color:black' href=profil.php?id=$nim>$no<th>"; 
					echo"<a style='color:black' href=profil.php?id=$nim>";
					echo"$nim";
					echo"<th width=35%><a style='color:black' href=profil.php?id=$nim>$namle<th><center><a style='color:black' href=profil.php?id=$nim>$mk
					<th><a style='color:black' href=profil.php?id=$nim><center>$tgl<th><a style='color:black' href=profil.php?id=$nim><center>$email";
					echo"<th><a style='color:black' href=profil.php?id=$nim><center><img src=foto/$foto width=80 height=120></img>";
					echo"<tr><th colspan=7><hr class='star-primary'>";
					$no = $no +1;
					}; echo"</table>";
					
				include "connect.php";
				echo"<h1><center>Praktikan</h1></center>";
				echo'<table class="table" align="center" width=90%>
				<tr bgcolor=cccccc><th><center>No<th><center>NIM<th><center>Nama Lengkap<th><center>Nama Panggilan<th><center>Tanggal Lahir<th><center>Email<th><center>Foto';
					$query = "SELECT * FROM `anggota` Where Posisi='Praktikan' ORDER BY `anggota`.`NIM` ASC";
					$exe = mysql_query($query);
					
					$no = 1;
					while($row = mysql_fetch_assoc($exe))
					{
						$nim    = $row['NIM'];
						$namle  = $row['Nama Lengkap'];
						$nampa  = $row['Nama Panggilan'];
						$tgl    = $row['Tanggal Lahir'];
						$email  = $row['Email'];
						$foto   = $row['Foto'];
					echo"<tr><th><a style='color:black' href=profil.php?id=$nim>$no<th>"; 
					echo"<a style='color:black' href=profil.php?id=$nim>";
					echo"$nim";
					echo"<th width=35%><a style='color:black' href=profil.php?id=$nim>$namle<th><center><a style='color:black' href=profil.php?id=$nim>$nampa
					<th><a style='color:black' href=profil.php?id=$nim><center>$tgl<th><a style='color:black' href=profil.php?id=$nim><center>$email";
					echo"<th><a style='color:black' href=profil.php?id=$nim><center><img src=foto/$foto width=80 height=120></img>";
					echo"<tr><th colspan=7><hr class='star-primary'>";
					$no = $no +1;
					}; echo"</table>";
					?>
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>