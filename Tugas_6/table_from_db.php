<?php 
  //memanggil file conn.php yang berisi koneski ke  data_kubase
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('koneksi.php'); 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tugas 6 - Tabel Fetch database</title>
    <!-- load css boostrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Tugas 6</a>
    </nav>

    <div class="container-fluid">
      <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column" style="margin-top:100px;">
               <li class="nav-item">
                <a class="nav-link active" href="<?php echo "index.php"; ?>">Tambah Data</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "index.php"; ?>">Kembali</a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

          <h2 style="margin: 30px 0 30px 0;">Database</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>No</th>
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
                  <th>Var25</th>
                  <th>Var26</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  //proses menampilkan  data_ku dari  data_kubase:
                  //siapkan query SQL
                  $query = "SELECT * FROM data_ku";
                  $result = mysqli_query(connection(),$query);
                 ?>

                 <?php while($data_ku = mysqli_fetch_array($result)): ?>
                  <tr>
                    <td><?php echo $data_ku['no'];  ?></td>
                    <td><?php echo $data_ku['var1'];  ?></td>
                    <td><?php echo $data_ku['var2'];  ?></td>
                    <td><?php echo $data_ku['var3'];  ?></td>
                    <td><?php echo $data_ku['var4'];  ?></td>
                    <td><?php echo $data_ku['var5'];  ?></td>
                    <td><?php echo $data_ku['var6'];  ?></td>
                    <td><?php echo $data_ku['var7'];  ?></td>
                    <td><?php echo $data_ku['var8'];  ?></td>
                    <td><?php echo $data_ku['var9'];  ?></td>
                    <td><?php echo $data_ku['var10'];  ?></td>
                    <td><?php echo $data_ku['var11'];  ?></td>
                    <td><?php echo $data_ku['var12'];  ?></td>
                    <td><?php echo $data_ku['var13'];  ?></td>
                    <td><?php echo $data_ku['var14'];  ?></td>
                    <td><?php echo $data_ku['var15'];  ?></td>
                    <td><?php echo $data_ku['var16'];  ?></td>
                    <td><?php echo $data_ku['var17'];  ?></td>
                    <td><?php echo $data_ku['var18'];  ?></td>
                    <td><?php echo $data_ku['var19'];  ?></td>
                    <td><?php echo $data_ku['var20'];  ?></td>
                    <td><?php echo $data_ku['var21'];  ?></td>
                    <td><?php echo $data_ku['var22'];  ?></td>
                    <td><?php echo $data_ku['var23'];  ?></td>
                    <td><?php echo $data_ku['var24'];  ?></td>
                    <td><?php echo $data_ku['var25'];  ?></td>
                    <td><?php echo $data_ku['var26'];  ?></td>
                    <td>
                      <a href="<?php echo "tempatupdate.php?no=".$data_ku['no']; ?>" class="btn btn-outline-warning btn-sm"> Update</a>
                      &nbsp;&nbsp;
                      <a href="<?php echo "delete.php?no=".$data_ku['no']; ?>" class="btn btn-outline-danger btn-sm"> Delete</a>
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

