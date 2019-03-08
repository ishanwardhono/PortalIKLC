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
				
					<table class="table" align="center">
					<tr bgcolor=cccccc>
					<th><center>
					<th><center>NIM
					<th width=40%><center>Nama Lengkap
					<th><center>Pesan Terakhir
					<?php
				include "connect.php";
					$query = "SELECT * FROM `anggota` ORDER BY `anggota`.`NIM` ASC";
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
					
					$query1 = "SELECT * FROM `pesan` WHERE `NIM Pengirim`='$admin' AND `NIM Penerima`='$nim' OR `NIM Pengirim`='$nim' AND `NIM Penerima`='$admin' ORDER BY `pesan`.`Waktu` DESC";
					$exe1 = mysql_query($query1);
					if($row1 = mysql_fetch_array($exe1)){
						$waktu1  = $row1['Waktu'];
						if($admin != $nim){
						echo"<tr><td><a style='color:black' href=profil.php?id=$nim><center><img src=foto/$foto width=50 height=70></img><td>"; 
						echo"<a style='color:black' href=profil.php?id=$nim>";
						echo"$nim<td><a style='color:black' href=profil.php?id=$nim>$namle";
						echo"<td>$waktu1 <td>";
					} else {
						echo"<td>Tidak ada Pesan <td><a href=pesan.php?id=$nim>Buat Pesan";
					}
					
					$no = $no +1;
					} }?>
					
				</table>

	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>