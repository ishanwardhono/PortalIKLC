<?php
session_start();
if(empty($_SESSION["admin"])){
	header('location:index.php');
} else {


	//var_dump($_POST);
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
					$query = "SELECT * FROM `news` ORDER BY `news`.`Waktu` DESC";
					$exe = mysql_query($query);
					echo "<table class='table' width=80%>";
					while($row = mysql_fetch_assoc($exe))
					{
						$mk     = $row['Matkul'];
						$file   = $row['File'];
						$ket    = $row['Keterangan'];
						$waktu  = $row['Waktu'];
					
					echo "<tr bgcolor=dfafaf><td>$mk<td>$waktu<td bgcolor=ffffff>";if($pos == 'Asisten' && $matkul == $mk){echo '<a href="hapus-file.php?id='.$file.'" 
										onclick="return confirm(\'Yakin?\')">Hapus</a></td>';}
					echo "<tr><td colspan=3><a href='news/$file'> $file</a>";
					echo "<tr><td colspan=3>$ket";
					echo "<tr><td colspan=3><hr class='star-primary'>";
					}; ?>
				<?php
		
		
		
	if($pos == 'Asisten'){ ?>
	
	<footer style="display:block;
					background-color:#cccccc;
					position:fixed;
					width:100%;
					height:110px;
					bottom:0;
					left:0;
					z-index: 100000;">
			
	<form action="proses-upload-file.php" enctype="multipart/form-data" method="POST">  
		<table class="table" width=50% align=center>
		<tr  bgcolor=cccccc><td>File Name  <td> <input name="userfile" type="file" required/>
		<td><button type="submit" class="btn btn-success btn-lg" style="padding: 0px 30px 0px 30px">Upload</button> 
		<td><td><td><td><td><td><td><td><td><td>
		<tr  bgcolor=cccccc><td>Keterangan <td colspan=12> <textarea cols=60 rows=2 name="ket"></textarea>
		</table>
		</form> \
		</footer>
	
	
				<?php 
					
	}
?>
	
	<script src="js/jquery.js"></script>
   <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>