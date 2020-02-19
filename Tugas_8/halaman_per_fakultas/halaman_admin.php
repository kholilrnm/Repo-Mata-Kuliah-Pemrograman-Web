<?php  
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'tugas8'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}
?>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<link rel="stylesheet/less" type="text/css" href="../css/style.less" />
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
<body bgcolor:@warna>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['kode_fakultas']==""){
		header("location:index.php?pesan=gagal");
		
		if($_SESSION['nama']!="admin"){
			die("Anda bukan admin");
		}
	}
 
	?>
	<h1>Halaman Admin</h1>
 
	<p>Halo <b><?php echo $_SESSION['nama']; ?></b> Anda telah login di kode fakultas : <b><?php echo $_SESSION['kode_fakultas']; ?></b>.</p>

	Administrasi User : <br> 
	
	
<?php  
	$sql = 'SELECT * FROM data_user';

	$query = mysqli_query($conn, $sql);
	
	echo '<table>
	<thead>
		<tr>
			<th>No Pegawai</th>
			<th>Nama</th>
			<th>Kode Fakultas</th>
			<th>Username</th>
			<th>Password</th>
		</tr>
	</thead>
	<tbody>';

	while ($row = mysqli_fetch_array($query))
	{
	echo '<tr>
		<td>'.$row['nopeg'].'</td>
		<td>'.$row['nama'].'</td>
		<td>'.$row['kode_fakultas'].'</td>
		<td>'.$row['username'].'</td>
		<td>'.$row['password'].'</td>
	</tr>';
	}
	echo '
	</tbody>
	</table>';
?>

	<br>
	<a href="../logout.php">Logout</a>
 
	<br/>
	<br/>
 
</body>
</html>