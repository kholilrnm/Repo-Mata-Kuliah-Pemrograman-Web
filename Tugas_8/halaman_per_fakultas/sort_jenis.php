<?php
session_start();
if($_SESSION['kode_fakultas'] == "FK001") {
   if($_POST['request']){
       $req=$_POST['request'];
            $conn=mysqli_connect('localhost', 'root', '','tugas8');
            $query=("SELECT * FROM data_inv WHERE jenis='$req' AND kode_fakultas='FK001'");
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
             $query=("SELECT * FROM data_inv WHERE jenis='$req' AND kode_fakultas='FK002'");
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
             $query=("SELECT * FROM data_inv WHERE jenis='$req' AND kode_fakultas='FK003'");
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
             $query=("SELECT * FROM data_inv WHERE jenis='$req' AND kode_fakultas='FK004'");
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
             $query=("SELECT * FROM data_inv WHERE jenis='$req' AND kode_fakultas='FK005'");
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
             $query=("SELECT * FROM data_inv WHERE jenis='$req' AND kode_fakultas='FK006'");
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
             $query=("SELECT * FROM data_inv WHERE jenis='$req' AND kode_fakultas='FK007'");
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
// include "conn.php";
    // $conn = new Connection();
    // if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    //     $query = "SELECT * FROM data_inv, fakultas WHERE";
    //     if ($_GET['jenis'] != ""){
    //         $jenis = $_GET['jenis'];
    //         $query = $query."jenis = '$jenis' and";
    //     }

    //     if($_GET['kondisi'] != ""){
    //         $kondisi = $_GET['kondisi'];
    //         $query = $query."kondisi = '$kondisi' and";
    //     }
        
    //     if($_GET['kode_fakultas'] != ""){
    //         $kode_fakultas = $_GET['kode_fakultas'];
    //         $query = $query."data_inv.kode_fakultas = $kode_fakultas";
    //     }

    //     $query = $query."fakultas.kode_fakultas = data_inv.kode_fakultas";
        
    //     $data_inv = mysqli_query($conn->connect(),$query);
    //     echo "$query";

    //     while($value = mysqli_fetch_array($data_inv)){
    //         echo "<tr>
    //                 <th scope='row'>".$value['kode_inv']."</th>
    //                 <td>".$value['jenis']."</td>
    //                 <td>".$value['nm_fakultas']."</td>
    //                 <td>".$value['barang']."</td>
    //                 <td>".$value['kondisi']."</td>
    //              </tr>";   
    //     }
    // }

?>