<?php 

function connection() {
   // membuat konekesi ke  data_kubase system
   $dbServer = 'localhost';
   $dbUser = 'root';
   $dbPass = '';
   $dbName = "tugas6";

   $conn = mysqli_connect($dbServer, $dbUser, $dbPass);

   if(! $conn) {
	      die('Koneksi gagal: ' . mysqli_error());
   }
   
   //memilih  data_kubase yang akan dipakai
   mysqli_select_db($conn,$dbName);
  
   return $conn;
}

