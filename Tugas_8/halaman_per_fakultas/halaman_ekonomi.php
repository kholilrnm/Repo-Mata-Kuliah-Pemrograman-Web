<html>
<head>
	<title>Halaman Ekonomi</title>
</head>
<body>
<link rel="stylesheet/less" type="text/css" href="../css/style.less" />
<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
<script>
	$(document).ready(function(){
		var delay = 2000;
		$("#fetchval").on('change',function(){
			var value = $(this).val();
			$.ajax(
			{
				url:'ajax_fetch.php',
				type:'POST',
				data:'request='+value,
				
				beforeSend:function()
				{
					$("#table-container").html('Sabar masih reload gan..............');
				},
				
				success:function(data)
				{
					setTimeout(() => {
						$("#table-container").html(data);	
					
					}, 1600);
				},
				
			});
		});

		$("#select_jenis").on('change',function(){
			var value = $(this).val();
			$.ajax(
			{
				url:'sort_jenis.php',
				type:'POST',
				data:'request='+value,
				
				beforeSend:function()
				{
					$("#table-container").html('Sabar masih reload gan..............');
				},
				
				success:function(data)
				{
					setTimeout(() => {
						$("#table-container").html(data);	
					
					}, 1600);
				},
				
			});
		});

		$("#select_kondisi").on('change',function(){
			var value = $(this).val();
			$.ajax(
			{
				url:'sort_kondisi.php',
				type:'POST',
				data:'request='+value,
				
				beforeSend:function()
				{
					$("#table-container").html('Sabar masih reload gan..............');
				},
				
				success:function(data)
				{
					setTimeout(() => {
						$("#table-container").html(data);	
					
					}, 1600);
				},
				
			});
		});

	});

</script>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['kode_fakultas']==""){
		header("location:index.php?pesan=gagal");
	}
	else {
		$_SESSION['kode_fakultas'] == "FK001";
	}
	?>

	<h1>Halaman Inventaris Fakultas : Ekonomi</h1>
 
	<p>Halo <b><?php echo $_SESSION['nama']; ?></b> Anda telah login di kode fakultas : <b><?php echo $_SESSION['kode_fakultas']; ?></b>.</p>

	<div id="ab"> Filter Tools : </div><select name="fetchby" id="fetchval">
		<option value="">Kosong</option>
		<option value="FK001">Ekonomi</option>
	</select>
	
	<select id="select_jenis">
		<option value="">Jenis Inventory</option>
		<option value="LCD">LCD</option>
		<option value="MEJA">Meja</option>
		<option value="KOMPUTER">KOMPUTER</option>
		<option value="KENDARAAN">Kendaraan</option>
	</select>

	<select id="select_kondisi">
		<option value="">Kondisi</option>
		<option value="BARU">Baru</option>
		<option value="BAIK">Baik</option>
		<option value="PERLU PERBAIKAN">Perlu Perbaikan</option>
	</select>

	<button> Filter </button>
	<br>
	<br>

	<div id="table-container">
	<?php  
	
	// $conn=mysqli_connect('localhost', 'root', '','tugas8');
	// $query=("SELECT * FROM data_inv");
	// $eksekusi=mysqli_query($conn,$query);

	// echo '<table border="1">';
	// echo '<tr>';
	// echo '<th> Kode Inv </th>';
	// echo '<th> Jenis </th>';
	// echo '<th> Kode Fakultas </th>';
	// echo '<th> Barang </th>';
	// echo '<th> Kondisi </th>';
	// echo '</tr>';

	// while($output=mysqli_fetch_assoc($eksekusi)){
	// 	echo '<tr>';
	// 	echo '<td>'.$output['kode_inv'].'</td>';
	// 	echo '<td>'.$output['jenis'].'</td>';
	// 	echo '<td>'.$output['kode_fakultas'].'</td>';
	// 	echo '<td>'.$output['barang'].'</td>';
	// 	echo '<td>'.$output['kondisi'].'</td>';
	// 	echo '</tr>';
	// };
	// echo '</table>';
	// mysqli_close($conn);
	
	
	?>
	
	
	
	</div>

	<br>
	<a href="../logout.php">Logout</a>
 
	<br/>
	<br/>
 


</body>
<!-- <script>
	function sort(){
		$(".tableBody").remove();
		var kondisi = $(".kondisi").val();
		var jenis = $(".jenis").val();
		var kode_fakultas = $(".kode_fakultas").val();
		$.ajax({
			type: "GET",
			url: "sort.php?kondisi=" + kondisi +"&kode_fakultas="+kode_fakultas+"&jenis="jenis,
			success: function(msg){
				$("#tableBody").html(msg);
			}
		});
	}
</script> -->
</html>