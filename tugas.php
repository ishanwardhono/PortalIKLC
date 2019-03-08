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
	<br><?php
		
	if($pos == 'Asisten'){
					echo"<h1><center>Tugas $matkul</h1></center>";
					include "connect.php";
					$query = "SELECT * FROM `tugas` WHERE `Matkul`='$matkul' ORDER BY `tugas`.`Waktu` DESC";
					$exe = mysql_query($query);
					echo "<table class='table' width=80% align=center>";
					echo"<tr bgcolor=cccccc align=center><td><b>NIM<td><b>Nama<td><b>Tugas<td><b>ke-<td><b>Waktu";
					while($row = mysql_fetch_assoc($exe))
					{
						$nim    = $row['NIM'];
						$nama   = $row['Nama'];
						$mk     = $row['Matkul'];
						$file   = $row['File'];
						$tgs    = $row['Tugas Ke'];
						$waktu  = $row['Waktu'];
						
					echo "<tr><td>$nim<td>$nama";
					echo "<td><a href='tugas/$file'> $file</a>";
					echo "<td>$tgs<td>$waktu";
					}
	} else {
			
				echo"<h1><center>Tugas</h1></center>";?>
				
					<table class='table' width=80% align=center>
					<form action="proses-upload-tugas.php" enctype="multipart/form-data" method="POST">  
					<td>Nama Tugas  : <input name="userfile" type="file" required />
					<td>Praktikum  : <select class=select name="matkul" required>
										<option>  </option>
										<option> Algoritma & Pemrogramman </option>
										<option> Pemrogramman Internet </option>
										<option> Sistem Digital </option>
								</select>
					<td colspan=2>Tugas Ke : <br><select name="tugas" required>
										<option>  </option>
										<option> 1 </option>
										<option> 2 </option>
										<option> 3 </option>
										<option> 4 </option>
										<option> 5 </option>
										<option> 6 </option>
										<option> 7 </option>
										<option> 8 </option>
								</select>
					<td><button type="submit" class="btn btn-success btn-lg" style="padding: 10px 50px 10px 50px">Upload</button> <?php
					include "connect.php";
					$query = "SELECT * FROM `tugas` WHERE `NIM`='$admin' ORDER BY `tugas`.`Waktu` DESC";
					$exe = mysql_query($query);
					echo"<tr bgcolor=cccccc align=center><td><b>Tugas<td><b>Mata Kuliah<td><b>ke-<td><b>Waktu<td>";
					while($row = mysql_fetch_assoc($exe))
					{
						$nim    = $row['NIM'];
						$nama   = $row['Nama'];
						$mk     = $row['Matkul'];
						$file   = $row['File'];
						$tgs    = $row['Tugas Ke'];
						$waktu  = $row['Waktu'];
					
					echo "<tr><td><a href='tugas/$file'> $file</a><td>$mk";
					echo "<td><center>$tgs<td><center>$waktu";
					echo '<td><center><a href="hapus-tugas.php?id='.$file.'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';
					}; ?>
				</table>
					
				<?php
	}?>
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>