<html>
<head>
	<title>Tabel Pesanan</title>
</head>
<body>
 
	<h3>TABEL PESANAN</h3>
	<br/>
	<a href="index.php">Kembali</a>
	<br/>
	<br/>
	<h3>Edit Data Pesanan</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from data_pesanan where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama Cust</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama_cust" value="<?php echo $d['nama_cust']; ?>">
					</td>
				</tr>
				<tr>
					<td>Pesanan</td>
					<td><input type="text" name="pesanan" value="<?php echo $d['pesanan']; ?>"></td>
				</tr>
				<tr>
					<td>No Handphone</td>
					<td><input type="text" name="no_handphone" value="<?php echo $d['no_handphone']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>