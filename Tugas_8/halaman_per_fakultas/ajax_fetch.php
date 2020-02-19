<?php  
if($_POST['request']){
    $req=$_POST['request'];
    
	$conn=mysqli_connect('localhost', 'root', '','tugas8');
	$query=("SELECT * FROM data_inv WHERE kode_fakultas='$req'");
	$eksekusi=mysqli_query($conn,$query);

	echo '<table border="1">';
	echo '<tr>';
	echo '<th> Kode Inv </th>';
	echo '<th> Jenis </th>';
	echo '<th> Kode Fakultas </th>';
	echo '<th> Barang </th>';
	echo '<th> Kondisi </th>';
	echo '</tr>';

	while($output=mysqli_fetch_assoc($eksekusi)){
		echo '<tr>';
		echo '<td>'.$output['kode_inv'].'</td>';
		echo '<td>'.$output['jenis'].'</td>';
		echo '<td>'.$output['kode_fakultas'].'</td>';
		echo '<td>'.$output['barang'].'</td>';
		echo '<td>'.$output['kondisi'].'</td>';
		echo '</tr>';
	};
	echo '</table>';
	mysqli_close($conn);
	

    
};




?>