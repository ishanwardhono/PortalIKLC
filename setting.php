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
    </nav><br><br>
<style type='text/css'>
#btn1{
padding:5px 15px;
background:#cccccc;
color:#000;
border:none;
cursor:pointer;
display:inline-block
}
#contoh1{
display:none;
text-align:center;
background:#cccccc;
color:#000;
padding:50px 0
}
</style>
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript'>
$(document).ready(function(){
  $("#btn1").click(function(){
    $("#contoh1").toggle(1000,function(){
    });
  });
});
</script>

	
				<?php
				
					$query = "SELECT * FROM `anggota` where NIM='$admin'";
					$exe = mysql_query($query);
					
					
					$row = mysql_fetch_assoc($exe);
						$nim    = $row['NIM'];
						$namle  = $row['Nama Lengkap'];
						$nampa  = $row['Nama Panggilan'];
						$tgl    = $row['Tanggal Lahir'];
						$email  = $row['Email'];
						$foto   = $row['Foto'];
						
					echo "<center><a href='upload-foto.php'><img src=foto/$foto width=300 height=400></a>";
					echo "<table class=table width=80% align=center>";
					echo "<tr><th>NIM<th>Nama Lengkap<th>Nama Panggilan<th>Tanggal Lahir<th>Email";
					echo "<tr><td>$nim<td>$namle<td>$nampa<td>$tgl<td>$email";
					?>
</tr></table>
<div id='contoh1'>

	<table class="table" align=center width=100%>
	<form action="proses-update.php?id=<?php echo $admin ?>" method="POST">
		<tr><th><center>Nama Panggilan<th><center>Tanggal Lahir<th><center>Email<th><center>Password<th><center>Match Password
		<tr>
		<td><center><input type="text" name="nampa" required></td>
		<td><center><input type="date" name="tgl" required></td>
		<td><center><input type="email" name="email" required></td>
		<td><center><input type="password" name="pass" required></td>
		<td><center><input type="password" name="matchpass" required></td>
		<tr>
		<td colspan=5 align=center><button type="submit" class="btn btn-success btn-lg" style="padding: 10px 50px 10px 50px">Ubah</button> 
	</td>
	<tr> <td colspan=5></center>
	*Nama Lengkap dan NIM Tidak Dapat Dirubah<br>
	**Jika Ingin Mengubah Nama Lengkap dan NIM, Silahkan Hapus Akun ini dan Daftar Kembali
	</form>
	</table>
	
</div>

					
					<?php
					echo "<center></button><a id='btn1' style='padding: 20px 20px 20px 20px;color:white;background-color:#87cefa;'>Edit</a>";
					echo '<a style="padding: 20px 20px 20px 20px;color:white;background-color:#8b0000;" href="hapus.php?id='.$row['id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></center>';
					?>

					<br><br><br><br><br>
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>