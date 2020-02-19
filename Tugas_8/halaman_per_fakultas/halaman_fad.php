<html>
<head>
	<title>Halaman FAD</title>
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
 
	?>
	<h1>Halaman FAD</h1>
 
	<p>Halo <b><?php echo $_SESSION['nama']; ?></b> Anda telah login di kode fakultas : <b><?php echo $_SESSION['kode_fakultas']; ?></b>.</p>
	<div id="ab"> Filter Tools : </div><select name="fetchby" id="fetchval">
		<option value="">Kosong</option>
		<option value="FK002">FAD</option>
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
	
	<a href="../logout.php">Logout</a>
 
	<br/>
	<br/>
 
</body>
</html>