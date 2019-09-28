<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('koneksi.php'); 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tugas 5 - Tabel Fetch Database</title>
    <!-- load css boostrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Tugas 5</a>
    </nav>

    <div class="container-fluid">
      <div class="row">
        
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <?php 
            //mengecek apakah proses update dan delete sukses/gagal
            if (@$_GET['status']!==NULL) {
              $status = $_GET['status'];
              if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Data Mahasiswa berhasil di-update</div>';
              }
              elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data Mahasiswa gagal di-update</div>';
              }

            }
           ?>
          <h2 style="margin: 30px 0 30px 0;">Database</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Var1</th>
                  <th>Var2</th>
                  <th>Var3</th>
                  <th>Var4</th>
                  <th>Var5</th>
                  <th>Var6</th>
                  <th>Var7</th>
                  <th>Var8</th>
                  <th>Var9</th>
                  <th>Var10</th>
                  <th>Var11</th>
                  <th>Var12</th>
                  <th>Var13</th>
                  <th>Var14</th>
                  <th>Var15</th>
                  <th>Var16</th>
                  <th>Var17</th>
                  <th>Var18</th>
                  <th>Var19</th>
                  <th>Var20</th>
                  <th>Var21</th>
                  <th>Var22</th>
                  <th>Var23</th>
                  <th>Var24</th>
                  <th>Var25/th>
                  <th>Var26</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  //proses menampilkan data dari database:
                  //siapkan query SQL
                  $query = "SELECT * FROM data_ku";
                  $result = mysqli_query(connection(),$query);
                 ?>

                 <?php while($data = mysqli_fetch_array($result)): ?>
                  <tr>
                    <td><?php echo $data['var1'];  ?></td>
                    <td><?php echo $data['var2'];  ?></td>
                    <td><?php echo $data['var3'];  ?></td>
                    <td><?php echo $data['var4'];  ?></td>
                    <td><?php echo $data['var5'];  ?></td>
                    <td><?php echo $data['var6'];  ?></td>
                    <td><?php echo $data['var7'];  ?></td>
                    <td><?php echo $data['var8'];  ?></td>
                    <td><?php echo $data['var9'];  ?></td>
                    <td><?php echo $data['var10'];  ?></td>
                    <td><?php echo $data['var11'];  ?></td>
                    <td><?php echo $data['var12'];  ?></td>
                    <td><?php echo $data['var13'];  ?></td>
                    <td><?php echo $data['var14'];  ?></td>
                    <td><?php echo $data['var15'];  ?></td>
                    <td><?php echo $data['var16'];  ?></td>
                    <td><?php echo $data['var17'];  ?></td>
                    <td><?php echo $data['var18'];  ?></td>
                    <td><?php echo $data['var19'];  ?></td>
                    <td><?php echo $data['var20'];  ?></td>
                    <td><?php echo $data['var21'];  ?></td>
                    <td><?php echo $data['var22'];  ?></td>
                    <td><?php echo $data['var23'];  ?></td>
                    <td><?php echo $data['var24'];  ?></td>
                    <td><?php echo $data['var25'];  ?></td>
                    <td><?php echo $data['var26'];  ?></td>
                    <td>
                      <a href="#" class="btn btn-outline-warning btn-sm"> Update</a>
                      &nbsp;&nbsp;
                      <a href="#" class="btn btn-outline-danger btn-sm"> Delete</a>
                    </td>
                  </tr>
                 <?php endwhile ?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>

