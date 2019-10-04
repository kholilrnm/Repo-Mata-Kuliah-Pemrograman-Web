<?php 

  include ('koneksi.php'); 

  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['no'])) {
          //query SQL
          $no = $_GET['no'];
          $query = "DELETE FROM data_ku WHERE no = '$no'"; 

          //eksekusi query
          $result = mysqli_query(connection(),$query);

          //redirect ke halaman lain
          header('Location: table_from_db.php');
      }  
  }