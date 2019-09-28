<?php
  include ('koneksi.php');

  $status = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $var1 = $_POST['var1'];
      $var2 = $_POST['var2'];
      $var3 = $_POST['var3'];
      $var4 = $_POST['var4'];
      $var5 = $_POST['var5'];
      $var6 = $_POST['var6'];
      $var7 = $_POST['var7'];
      $var8 = $_POST['var8'];
      $var9 = $_POST['var9'];
      $var10 = $_POST['var10'];
      $var11 = $_POST['var11'];
      $var12 = $_POST['var12'];
      $var13 = $_POST['var13'];
      $var14 = $_POST['var14'];
      $var15 = $_POST['var15'];
      $var16 = $_POST['var16'];
      $var17 = $_POST['var17'];
      $var18 = $_POST['var18'];
      $var19 = $_POST['var19'];
      $var20 = $_POST['var20'];
      $var21 = $_POST['var21'];
      $var22 = $_POST['var22'];
      $var23 = $_POST['var23'];
      $var24 = $_POST['var24'];
      $var25 = $_POST['var25'];
      $var26 = $_POST['var26'];
      
      //query SQL
      $query = "INSERT INTO data_ku (var1, var2, var3, var4, var5, var6, var7, var8, var9, var10, 
      var11, var12, var13, var14, var15, var16, var17, var18, var19, var20,
      var21, var22, var23, var24, var25, var26) VALUES('$var1','$var2','$var3','$var4','$var5','$var6','$var7',
      '$var8','$var9','$var10','$var11','$var12','$var13','$var14','$var15','$var16','$var17','$var18','$var19','$var20',
      '$var21','$var22','$var23','$var24','$var25','$var26')"; 

      //eksekusi query
      $result = mysqli_query(connection(),$query);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Tugas 5 Input dalam Database</title>
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/gif_loader.css">
  <link rel="stylesheet" type="text/css" href="css/visible_bg.css">
</head>
<body>
<style type="text/css">
  input[type="text"]::placeholder {
  text-align: center;
}
</style>

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
<!-- Begin grid container_16 -->
<div class="container_16">
  <h2>
    Tugas 5 - Input in Database and Show it
  </h2>
<center>
<form>
  <button type="submit" formaction="table_from_db.php">Data tabel DB</button>&nbsp;&nbsp;
  <button type="submit" formaction="data_array_db.php">Data Hasil Fetch Array</button>
</form>
</center><br>

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
<form action="index.php" method="POST">

<td class="b">
<div class="grid_9">
   <div class="header-content">
      <div id="gayasatu"><p class="gayasatu" style="font-size: 16px"><b>
        <input type="text" name="var1" placeholder="Masukkan Nama"></b></p></div> 
      <hr class="gayadua" align="left" size="2px" color="#b5651d"> 
      <p class="gayatiga"><input type="text" name="var2" placeholder="Masukkan Asal Mahasiswa"></p> 
      <p class="gayatiga"><input type="text" name="var3" placeholder="Masukkan NPM"> | <input type="text" name="var4" placeholder="Masukkan Jurusan"></p> 
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
              <td class="text" style="line-height: 21.8px">
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
                &emsp; : &emsp;<input type="text" name="var5" placeholder="Masukkan Nama"><br>
                &emsp; : &emsp;<input type="text" name="var6" placeholder="Masukkan TTL"><br>
                &emsp; : &emsp;<input type="text" name="var7" placeholder="Masukkan Alamat"><br>
                &emsp; : &emsp;<input type="text" name="var8" placeholder="Masukkan Jenis Kelamin"><br>
                &emsp; : &emsp;<input type="text" name="var9" placeholder="Masukkan Status"><br>
                &emsp; : &emsp;<input type="text" name="var10" placeholder="Masukkan Agama"><br>
                &emsp; : &emsp;<input type="text" name="var11" placeholder="Masukkan TB/BB"><br>
                &emsp; : &emsp;<input type="text" name="var12" placeholder="Masukkan Gol Darah"><br>
                &emsp; : &emsp;<input type="text" name="var13" placeholder="Masukkan KWN"><br>
                &emsp; : &emsp;<input type="text" name="var14" placeholder="Masukkan No.Telpon"><br>
                &emsp; : &emsp;<input type="text" name="var15" placeholder="Masukkan E-Mail"><br>
                &emsp; : &emsp;<input type="text" name="var16" placeholder="Masukkan Pendidikan"><br>
                &emsp; : &emsp;<input type="text" name="var17" placeholder="Masukkan Hobi"><br>
                &emsp; : &emsp;<input type="text" name="var18" placeholder="Masukkan Website"><br>
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
              <td width="250px;"><input type="text" name="var19" placeholder="Harap Di Isi"></td>               
            </tr>

            <tr class="content-pendidikan">
              <td><img src="img/pendidikan/jenjang2.png"></td>
              <td>Sekolah Menengah Pertama</td>
              <td><input type="text" name="var20" placeholder="Harap Di Isi"></td> 
            </tr>

            <tr class="content-pendidikan">
              <td><img src="img/pendidikan/jenjang3.png"></td>
              <td>Sekolah Menengah Atas</td>
              <td><input type="text" name="var21" placeholder="Harap Di Isi"></td> 
            </tr>

            <tr class="content-pendidikan">
              <td><img src="img/pendidikan/jenjang4.png"></td>
              <td>Perguruan Tinggi</td>
              <td><input type="text" name="var22" placeholder="Harap Di Isi"></td> 
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
              <td bgcolor="#ff5d00">Nama</td><!--    
              <td bgcolor="#ff5d00">Jabatan</td>  -->  
            </tr>

            <tr class="content-pengalaman">
              <td width="100px"><img src="img/pengalaman/peng1.png"></td>
              <td width="200px;">Ekstrakurikuler</td>
              <td width="250px;"><input type="text" name="var23" placeholder="Harap Di Isi"></td>
              <!-- <td width="250px;"><input type="text" name="23peng" placeholder=""></td>                -->
            </tr>

            <tr class="content-pengalaman">
              <td><img src="img/pengalaman/peng2.png"></td>
              <td>Organisasi</td>
              <td><input type="text" name="var24" placeholder="Harap Di Isi"></td> 
              <!-- <td><input type="text" name="23peng" placeholder=""></td> -->
            </tr>

            <tr class="content-pengalaman">
              <td><img src="img/pengalaman/peng3.png"></td>
              <td>Kepanitiaan</td>
              <td><input type="text" name="var25" placeholder="Harap Di Isi"></td><!-- 
              <td><input type="text" name="23peng" placeholder=""></td>  -->
            </tr>

            <tr class="content-pengalaman">
              <td><img src="img/pengalaman/peng4.png"></td>
              <td>Organisasi</td>
              <td><input type="text" name="var26" placeholder="Harap Di Isi"></td><!-- 
              <td><input type="text" name="23peng" placeholder=""></td>   -->
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

<button type="submit" style="margin-left: 45.5%;">KIRIM DATA ANDA</button>
</form>
</div>

</div>

</body>
</html>
