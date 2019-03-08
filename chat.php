<?php
session_start();
if(empty($_SESSION["admin"])){
	header('location:index.php');
} else {

include "connect.php";	
$admin = "$_SESSION[admin]";
$namle = "$_SESSION[chat]";
$query1 = "SELECT * FROM `anggota` WHERE NIM='$admin'";
$exe1 = mysql_query($query1);					
$row1 = mysql_fetch_assoc($exe1);
$na = $row1['Nama Lengkap'];
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

					<table class="table" width=70% align="center">
<?php
				
					$query = "SELECT * FROM `home`";
					$exe = mysql_query($query);
					
					while($row = mysql_fetch_assoc($exe))
					{
						$nim  = $row['NIM'];
						$nama = $row['Nama'];
						$waktu  = $row['Waktu'];
						$obrol = $row['Obrolan'];
						if($admin==$nim){
							echo"
							<tr><td>
							<table align=right class='table'>
							<tr><td align=right bgcolor='cccccc'><font size=5>$obrol</font>
							<tr><td align=right><font size=1>$waktu</font></table>
							";
						} else {
							echo"
							<tr><td>
							<table class='table'>
							<tr><td width=20%><font size=2>$nim</font><td><b><font size=4>$nama</font>
							<tr><td colspan=2 bgcolor='dfafaf'><font size=5>$obrol</font>
							<tr><td colspan=2><font size=1>$waktu</font></table>
							";
						}
					}; ?>
				</table>
				<br><br>
		<footer style="display:block;
					background-color:#333333;
					position:fixed;
					width:100%;
					height:60px;
					bottom:0;
					left:0;
					z-index: 100000;">
			<form name="form" action="tujuan-chat.php?nama=<?php echo $na ?>&nim=<?php echo $admin ?>" method="post">
			<div width=50% class="form-group col-xs-12 floating-label-form-group controls">
				<table align=right color=333333>
				<tr>
				<td><textarea name="obrolan" cols=80 rows=2 name="ket" placeholder="Obrolan.............." required></textarea>
				<td><button type="submit" class="btn btn-success btn-lg" style="padding: 0px 20px 0px 20px">Kirim</button> 
				
            </table>
			</div>
			</form>
		</footer>
</table>
<section id="bawah"></section>
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>