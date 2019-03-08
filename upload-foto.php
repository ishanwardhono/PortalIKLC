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
	<br><br>
	<?php
		$query = "SELECT * FROM `anggota` Where NIM='$admin'";
		$exe = mysql_query($query);
		$row = mysql_fetch_assoc($exe);
		
		$nim  = $row['NIM'];
		$nama = $row['Nama Lengkap'];
		$foto = $row['Foto'];
		
		echo"<table class='table' width=80% align=center>";
		echo"<tr><td><center><h1>$nim";
		echo"<td rowspan=4 width=300><img src=foto/$foto width=300 height=400 href='upload-foto.php'>";
		echo"<tr><td><center><h3>$nama";
		?>
		<tr><td><center>
		<form action="proses-upload-foto.php" enctype="multipart/form-data" method="post">  
		Browse Foto : <input name="userfile" type="file" />  
		<tr><td>
		<center><button type="submit" class="btn btn-success btn-lg" style="padding: 10px 50px 10px 50px">Uploadkan Foto</button>
		</form> 
		</table>
		
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>