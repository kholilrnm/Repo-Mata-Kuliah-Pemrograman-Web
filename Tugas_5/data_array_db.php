<?php
  include ('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Tugas 5 Show Data &mdash; From Database</title>
<link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/gif_loader.css">
  <link rel="stylesheet" type="text/css" href="css/visible_bg.css">
</head>
<body>

<?php 
  $query = "SELECT * FROM data_ku";
  $result = mysqli_query(connection(),$query);
?>

<?php while($data = mysqli_fetch_array($result)): ?>
<div id="coba">
<div id="load-gambar">
  <center>
    <img id="load-gambar1" src="img/anime_loader.gif" height="20%" width="20%">
  </center>
</div>

<div id="load-gambar_2">
  <center>
    <img id="load-gambar2" src="img/percentasi_loader8.gif" height="8%" width="8%">
  </center>
</div>


<div id='muncul'>
  <div class="body-tes">
<h1>
  <a href="http://960.gs/">Ini Halaman Hasil Ambil Data Array Database </a>
</h1>
<!-- Begin grid container_16 -->
<div class="container_16">
  <h2>
    16 Column Grid
  </h2>

<!-- Begin grid_16 -->
<div class="grid_16">
    <div class="navbar">
      <table class="table-navbar">
          <tr>
              <td class="isi-navbar1">
                <a href="#tentang">Tentang</a>
                <a href="#pendidikan">Pendidikan</a>
                <a href="#skill">Keahlian</a>
                <a href="#pengalaman">Pengalaman</a>
                <a href="#kontak">Kontak</a>
              </td>
        
              <td class="isi-navbar2">
                <a class="img-2" href="halaman_project.html"><img src="img/project.png" title="Ke halaman project"></a>
              </td>
          </tr>
    </table>
  </div>
</div>
<!-- End grid_16 -->

<div class="header">
<table class="header-table">
<td class="a"> 

<!-- Begin grid_7 -->
<div class="clear"></div>
  <div class="grid_7">
    <center><img class="profil" src="img/kholil_jas.png" alt="Ini Foto Profil"></img></center>
  </div>
</td>
<!-- end .grid_7 -->

<td class="b">
<div class="grid_9">
   <div class="header-content">
      <div id="gayasatu"><p class="gayasatu" style="font-size: 16px"><b>

      	<?php  
      		echo $data['var1'];
      	?>
      		
      	</b></p></div> 
      <hr class="gayadua" align="left" size="2px" color="#b5651d"> 
      <p class="gayatiga">

        <?php  
      		echo $data['var2'];
      	?>
      		
      	</p> 
      <p class="gayatiga">        
      	<?php  
      		echo $data['var3'];
      	?> | 

        <?php  
      		echo $data['var4'];
      	?></p> 
        <button class="instagram-box"><a href="https://www.instagram.com/kholilrnm_/" target="_blank" style="text-decoration: none; color: white">Followers 236❤️</a></button>
    </div>
</div>
</td>  
<!-- end .grid_9 -->

</table>
</div>

<!-- Begin grid_8 -->
<div class="clear"></div>
<div class="grid_8">
<div id="tentang" class="container">
  <table class="table-container">
    <tr>

      <td class="tentangku"><hr>
        <h2 class="title">Biodata Diri</h2><br>
          <table class="biodata">
            <tr>
              <td class="text">
                Nama                <br>
                Tempat, Tgl Lahir   <br>
                Alamat              <br>
                Jenis Kelamin       <br>
                Status              <br>
                Agama               <br>
                Tinggi / Berat Badan<br>
                Golongan Darah      <br>
                Kewarganegaraan     <br>
                No. Telepon         <br>
                E-Mail              <br>
                Pendidikan Terakhir <br>
                Hobi                <br>
                Website             <br>
              </td>
              <td class="text">
                &emsp; : &emsp;
             	<?php  
      				echo $data['var5'];
      			?><br>
                &emsp; : &emsp;
                <?php  
      				echo $data['var6'];
      			?><br>
                &emsp; : &emsp;
                <?php  
      				echo $data['var7'];
      			?><br>
                &emsp; : &emsp;
                <?php  
      				echo $data['var8'];
      			?><br>
                &emsp; : &emsp;
                <?php  
      				echo $data['var9'];
      			?><br>
                &emsp; : &emsp;
                <?php  
      				echo $data['var10'];
      			?><br>
                &emsp; : &emsp;
                <?php  
      				echo $data['var11'];
      			?><br>
                &emsp; : &emsp;
                <?php  
      				echo $data['var12'];
      			?><br>
                &emsp; : &emsp;
                <?php  
      				echo $data['var13'];
      			?><br>
                &emsp; : &emsp;
                <?php  
      				echo $data['var14'];
      			?><br>
                &emsp; : &emsp;
                <?php  
      				echo $data['var15'];
      			?><br>
                &emsp; : &emsp;
                <?php  
      				echo $data['var16'];
      			?><br>
                &emsp; : &emsp;
                <?php  
      				echo $data['var17'];
      			?><br>
                &emsp; : &emsp;
                <?php  
      				echo $data['var18'];
      			?><br>
              </td>
            </tr>
          </table>
      </td>
</div>
<!-- End grid_8 -->

<!-- Begin grid_8 -->
<div class="grid_8">

      <td id="skill" class="skillku"><hr>
        <h2 class="title">Keahlian</h2>
          <div class="content-skill"></div>
            <table class="kelasGambar">
              <tr>
                <td class="gambarLogo">
                   <img src="img/logoSkill/htmlLogo.png"><br>
                   <img src="img/logoSkill/cssLogo.png"><br>
                   <img src="img/logoSkill/jsLogo.png"><br>                           
                   <img src="img/logoSkill/phpLogo.png"><br>
                   <img src="img/logoSkill/laravelLogo.png"><br>
                   <img src="img/logoSkill/javaLogo.png"><br>
                </td>

                <td class="kelasSkill">
                  <div class="skills">
                    <div class="s html">85%</div>
                  </div>
                  <div class="skills">
                    <div class="s css">70%</div>
                  </div>
                  <div class="skills">
                    <div class="s js">30%</div>
                  </div>
                  <div class="skills">
                    <div class="s php">70%</div>
                  </div>
                  <div class="skills">
                    <div class="s laravel">73%</div>
                  </div>
                  <div class="skills">
                    <div class="s java">50%</div>
                  </div>
                  <div class="skills">
                    <div class="s C">75%</div>
                  </div>
                  <div class="skills">
                    <div class="s mysql">65%</div>
                  </div>
                </td>

              </tr>
          </table>
      </td>
    </tr>
  </table>
</div>

</div>
<!-- End grid_8 -->

<!-- Begin grid_8 -->
<div class="clear"></div>
<div id="pendidikan" class="container-1">
<div class="grid_8_1">

  <table class="table-container-1">
    <tr>
      <td class="pendidikan"><hr>
        <h2 class="title">Pendidikan</h2>
          <table class="pend" border="2">
            <tr class="content-pendidikan">
              <td bgcolor="#ff5d00">Waktu</td>
              <td bgcolor="#ff5d00">Jenjang</td>
              <td bgcolor="#ff5d00">Nama Instansi</td>   
            </tr>

            <tr class="content-pendidikan">
              <td><img src="img/pendidikan/jenjang1.png"></td>
              <td width="200px;">Sekolah Dasar</td>
              <td width="250px;">
              
              <?php  
      				echo $data['var19'];
      		  ?>
      				
      			</td>               
            </tr>

            <tr class="content-pendidikan">
              <td><img src="img/pendidikan/jenjang2.png"></td>
              <td>Sekolah Menengah Pertama</td>
              <td>

              <?php  
      				echo $data['var20'];
      		  ?>
              
              </td> 
            </tr>

            <tr class="content-pendidikan">
              <td><img src="img/pendidikan/jenjang3.png"></td>
              <td>Sekolah Menengah Atas</td>
              <td>

              <?php  
      				echo $data['var21'];
      		  ?>

              </td> 
            </tr>

            <tr class="content-pendidikan">
              <td><img src="img/pendidikan/jenjang4.png"></td>
              <td>Perguruan Tinggi</td>
              <td>
              	
              <?php  
      				echo $data['var22'];
      		  ?>

              </td> 
            </tr>
          </table>
        </td>
</div>
<!-- End grid_8 -->


<!-- Begin grid_8 -->
<div class="grid_8_1">

        <td id="pengalaman" class="pengalaman"><hr>
        <h2 class="title">Pengalaman</h2>
          <table class="peng" border="2">
            <tr class="content-pengalaman">
              <td bgcolor="#ff5d00">Waktu</td>
              <td bgcolor="#ff5d00">Bentuk</td>
              <td bgcolor="#ff5d00">Nama</td>   <!-- 
              <td bgcolor="#ff5d00">Jabatan</td>    -->
            </tr>

            <tr class="content-pengalaman">
              <td width="100px"><img src="img/pengalaman/peng1.png"></td>
              <td width="200px;">Ekstrakurikuler</td>
              <td width="250px;">

              <?php  
      				echo $data['var23'];
      		  ?>

              </td><!-- 
              <td width="250px;">Anggota</td>            -->    
            </tr>

            <tr class="content-pengalaman">
              <td><img src="img/pengalaman/peng2.png"></td>
              <td>Organisasi</td>
              <td>
              
              <?php  
      				echo $data['var24'];
      		  ?>              	

              </td> <!-- 
              <td>Ketua Infokom</td> -->
            </tr>

            <tr class="content-pengalaman">
              <td><img src="img/pengalaman/peng3.png"></td>
              <td>Kepanitiaan</td>
              <td>
              
              <?php  
      				echo $data['var25'];
      		  ?>
      		  
              </td><!-- 
              <td>Divisi Keamanan</td>  -->
            </tr>

            <tr class="content-pengalaman">
              <td><img src="img/pengalaman/peng4.png"></td>
              <td>Organisasi</td>
              <td>
              
              <?php  
      				echo $data['var26'];
      		  ?>
      		  
              </td><!-- 
              <td>Ketua Komisariat Regional</td>   -->
            </tr>
        </table>
        </td>

    </tr>
  </table>
</div>

</div>
<!-- end .grid_8 -->


<!-- Begin grid_8 -->
<div class="grid_8_2">
  
<div id="kontak" class="container-2">
  <table class="table-container-2">
    <tr>
      <td class="kontakku"><hr>
        <h2 class="title">Kontak</h2>
          <table class="isi-kontak" width="60%">
            
            <tr class="content-kontak">
              <td class=".container_16 .push_3">
                <a href="https://www.dicoding.com/users/450987" target="_blank">
                  <img src="img/kontak/dicoding.png" class="dicoding-icon">
                </a>
              </td>
              
              <td class=".container_16 .push_3">
                <a href="https://github.com/kholilboy" target="_blank">
                  <img src="img/kontak/github.png" class="git-icon">
                </a>
              </td>
              
              <td class=".container_16 .push_3">
                <a href="https://www.instagram.com/kholilrnm_/" target="_blank">
                  <img src="img/kontak/instagram.png" class="ig-icon">
                </a>
              </td>
              
              <td class=".container_16 .push_3">
                <a href="https://www.linkedin.com/in/kholilboy" target="_blank">
                  <img src="img/kontak/linkedin.png" class="link-icon">
                </a>
              </td>
            </tr>

          </table>
      </td>
    </tr>
  </table>

</div>
<!-- End grid_8 -->

</div>


<!-- Begin grid_16 -->
<div class="grid_16">
<div class="footer">
    <p style="font-size: 13.5px">
      Made With ❣️
      <a style="color: gold" href="https://www.dicoding.com/users/450987" target="_blank"> Kholil</a>&nbsp;||
      <script type="text/javascript">document.write(new Date().getFullYear());</script>
    </p>
</div>
</div>
<!-- End grid_16 -->

</div>
<!-- End grid container_16 -->
</div>

</div>

</div>
<?php endwhile ?>
</body>
</html>