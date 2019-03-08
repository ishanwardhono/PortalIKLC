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
	$id = $_GET['id'];
	
	$query = "SELECT * FROM `anggota` WHERE NIM='$id'";
		$exe = mysql_query($query);
		$row = mysql_fetch_array($exe);
	$nim    = $row['NIM'];
	$namle  = $row['Nama Lengkap'];
	$nampa  = $row['Nama Panggilan'];
	$tgl    = $row['Tanggal Lahir'];
	$email  = $row['Email'];
	$notes  = $row['Notes'];
	$foto   = $row['Foto'];
	?>
	
	<table class="table" align=center width=90%>
	<tr><td><h3><?php echo $nim ?></h3><td><h3><?php echo $namle ?></h3>
	<td width=20% colspan=2 rowspan=3><?php if($id == $admin){echo"<a style='color:black' href=upload-foto.php>";} echo"<center><img src=foto/$foto width=140 height=200></img>"; ?>
	</tr>
	<?php
	if($id == $admin){
		?>
		<tr><td bgcolor=eeeeee colspan=2 rowspan=7><?php echo $notes ?>
		<tr>
		<tr height=50><td>Nama Paggilan<td><?php echo $nampa ?>
		<tr height=50><td>Tanggal Lahir<td><?php echo $tgl ?>
		<tr height=50><td>Email<td><?php echo $email ?>
		<tr height=50><td colspan=2 align=center><a style='color:black' href="setting.php"> Pengaturan Akun </a>
		<tr><td>
		<tr><td colspan=2 align=center>
		<form action="notes.php" method="POST">
			<textarea name="notes" cols=115 placeholder="Catatan............."></textarea><br>
			<button type="submit" class="btn btn-success btn-lg" style="padding: 5px 50px 5px 50px">Update Catatan</button> 
		</form>
		
		<?php
	}else {
	

	
$query1 = "SELECT * FROM `pesan` WHERE `NIM Pengirim`='$admin' AND `NIM Penerima`='$id' OR `NIM Pengirim`='$id' AND `NIM Penerima`='$admin'";
$exe1 = mysql_query($query1);
//$row1 = mysql_fetch_array($exe1);
	
//$query2 = "SELECT * FROM `pesan` WHERE NIM='$admin'";
//$exe2 = mysql_query($query2);
//$row2 = mysql_fetch_array($exe2);

?>
<tr><tr><tr><tr>
<tr><td colspan=2  align=center><b> Pesan </b>
		<td>Nama Paggilan<td><?php echo $nampa ?>
		
<tr><td rowspan=4 colspan=2><table class="table" width=100% align="center">
<?php while($row1 = mysql_fetch_array($exe1))
					{
						$nim1  = $row1['NIM Pengirim'];
						$nama1 = $row1['Pengirim'];
						$waktu1  = $row1['Waktu'];
						$pesan1 = $row1['Pesan']; 
					
					if($admin==$nim1){
							echo"
							<tr><td>
							<table align=right class='table'>
							<tr><td align=right bgcolor='cccccc'><font size=4>$pesan1</font>
							<tr><td align=right><font size=1>$waktu1</font></table>
							";
						} else {
							echo"
							<tr><td>
							<table class='table'>
							<tr><td colspan=2 bgcolor='dfafaf'><font size=4>$pesan1</font>
							<tr><td colspan=2><font size=1>$waktu1</font></table>
							";
						}
						};

						?>
						</table>
		<tr><td height=50>Tanggal Lahir<td><?php echo $tgl ?>
		<tr><td height=50>Email<td><?php echo $email ?>
	<tr><td><tr><td colspan=2 align=center>
	<form name="form" action="tujuan-pesan.php?id=<?php echo $id ?>" method="post">
	<textarea cols="100" rows="2" name="pesan" placeholder="Pesan........." required></textarea><br>
	<button type="submit" class="btn btn-success btn-lg" style="padding: 0px 50px 0px 50px">Kirim Pesan</button> 
	</form>
</table>


<?php }
?>	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>