
<?php
session_start();
if(empty($_SESSION["admin"])){
	header('location:index.php');
} else {
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

<?php

	//var_dump($_POST);
		
	if($pos == 'Asisten'){
		include "connect.php";
		$query = "SELECT * FROM `anggota` WHERE Posisi='Praktikan' ORDER BY `NIM` ASC";
		$exe = mysql_query($query);
		
				?> 
					<br><br>
					<form method="POST" action="nilai-insert.php">
					<table class="table table-bordered" width=80% align="center">
					<tr bgcolor=cccccc><th><center>NIM<th><center>Nama
					<th><center>Nilai <?php echo $matkul ?><th><center>Update Nilai
					<?php
				
					
					while($row = mysql_fetch_assoc($exe))
					{
						$nim    = $row['NIM'];
						$nama   = $row['Nama Lengkap'];
								$query1 = "SELECT * FROM `nilai` WHERE NIM=$nim  ORDER BY `NIM` ASC";
								$exe1 = mysql_query($query1);
								$row1 = mysql_fetch_assoc($exe1);
						$nilai  = $row1[$matkul];
					echo "<tr align=center><td>$nim<td>$nama<td>$nilai";?>
					<td>	<input type='radio' name='<?php echo $nim ?>' value='A'  <?php if($nilai == 'A'){ echo 'checked="checked"'; } ?> required />A
							<input type='radio' name='<?php echo $nim ?>' value='B+' <?php if($nilai == 'B+'){ echo 'checked="checked"'; } ?> required />B+
							<input type='radio' name='<?php echo $nim ?>' value='B'  <?php if($nilai == 'B'){ echo 'checked="checked"'; } ?> required />B
							<input type='radio' name='<?php echo $nim ?>' value='C+' <?php if($nilai == 'C+'){ echo 'checked="checked"'; } ?> required />C+
							<input type='radio' name='<?php echo $nim ?>' value='C'  <?php if($nilai == 'C'){ echo 'checked="checked"'; } ?> required />C
							<input type='radio' name='<?php echo $nim ?>' value='D'  <?php if($nilai == 'D'){ echo 'checked="checked"'; } ?> required />D
							<input type='radio' name='<?php echo $nim ?>' value='E'  <?php if($nilai == 'E'){ echo 'checked="checked"'; } ?> required />E
					<?php } ?>
				</table>
					<center><button type="submit" class="btn btn-success btn-lg" style="padding: 5px 50px 5px 50px">Update Nilai</button> 
				</form>
				<?php
					
	} else {
				?> 
					<br><br><br>
					<h1><center>Nilai Praktikum</h1></center><br>
					<table class="table table-bordered" width=80% align="center"><tr bgcolor=cccccc><th><center>NIM
					<th><center>Nama<th><center>Sistem Digital<th><center>Pemrogramman Internet
					<th><center>Algoritma & Pemrogramman
					<?php
				include "connect.php";
					$query = "SELECT * FROM `nilai` WHERE NIM=$admin";
					$exe = mysql_query($query);
					
					while($row = mysql_fetch_assoc($exe))
					{
						$nim    = $row['NIM'];
						$nama   = $row['Nama'];
						$sd     = $row['Sistem Digital'];
						$pi     = $row['Pemrogramman Internet'];
						$ap     = $row['Algoritma & Pemrogramman'];
					echo "<tr align=center><td>$nim<td>$nama<td>$sd<td>$pi<td>$ap";

					}; ?>
				</table>
				<?php
	}
} ?>
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
