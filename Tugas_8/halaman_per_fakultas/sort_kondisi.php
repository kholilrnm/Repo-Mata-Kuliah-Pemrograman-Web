<?php  
session_start();
if($_SESSION['kode_fakultas'] == "FK001") {
   if($_POST['request']){
       $req=$_POST['request'];
            $conn=mysqli_connect('localhost', 'root', '','tugas8');
            $query=("SELECT * FROM data_inv WHERE kondisi='$req' AND kode_fakultas='FK001'");
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
}

if($_SESSION['kode_fakultas'] == "FK002") {
    if($_POST['request']){
        $req=$_POST['request'];
             $conn=mysqli_connect('localhost', 'root', '','tugas8');
             $query=("SELECT * FROM data_inv WHERE kondisi='$req' AND kode_fakultas='FK002'");
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
 }

if($_SESSION['kode_fakultas'] == "FK003") {
    if($_POST['request']){
        $req=$_POST['request'];
             $conn=mysqli_connect('localhost', 'root', '','tugas8');
             $query=("SELECT * FROM data_inv WHERE kondisi='$req' AND kode_fakultas='FK003'");
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
}

if($_SESSION['kode_fakultas'] == "FK004") {
    if($_POST['request']){
        $req=$_POST['request'];
             $conn=mysqli_connect('localhost', 'root', '','tugas8');
             $query=("SELECT * FROM data_inv WHERE kondisi='$req' AND kode_fakultas='FK004'");
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
}

if($_SESSION['kode_fakultas'] == "FK005") {
    if($_POST['request']){
        $req=$_POST['request'];
             $conn=mysqli_connect('localhost', 'root', '','tugas8');
             $query=("SELECT * FROM data_inv WHERE kondisi='$req' AND kode_fakultas='FK005'");
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
}

if($_SESSION['kode_fakultas'] == "FK006") {
    if($_POST['request']){
        $req=$_POST['request'];
             $conn=mysqli_connect('localhost', 'root', '','tugas8');
             $query=("SELECT * FROM data_inv WHERE kondisi='$req' AND kode_fakultas='FK006'");
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
}

if($_SESSION['kode_fakultas'] == "FK007") {
    if($_POST['request']){
        $req=$_POST['request'];
             $conn=mysqli_connect('localhost', 'root', '','tugas8');
             $query=("SELECT * FROM data_inv WHERE kondisi='$req' AND kode_fakultas='FK007'");
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
}
?>
