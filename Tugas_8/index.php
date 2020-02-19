<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="author" content="W | K - Project Sangar" />
  <title>Login Form Admin</title>

  <link href="css/login_style.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

  <link rel="shortcut icon" href="#"/>

</head>
<body>

<div id="particles-js">

<div class="container">
  <div class="logo" style="background-image: url('img/Admin.png');"></div>
  
<!-- Login -->
  <div class="login"> 
    <h1>Inventaris Barang Fakultas</h1>
	
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert' style='color:red' ><center>Username atau Password tidak sesuai !</div>";
		}
	}
	?>

    <form class="form" method="post" action="cek_login.php"><br>
      <p class="field">
        <input type="text" name="username" placeholder="Username" required/>
        <i class="fa fa-user"></i>
      </p>

      <p class="field">
        <input type="password" name="password" placeholder="Password" required/>
        <i class="fa fa-lock"></i>
      </p>

      <p class="submit"><input type="submit" name="commit" value="Login"></p>

      <p class="forgot">
        <a href="#">Forgot Password?</a>
      </p>

    </form>
  </div>

  <div class="copyright">
            <p>
            Copyright &copy;       
            <script type="text/javascript">
                document.write(new Date().getFullYear());
            </script>, 
            <a style="color: gold" href="" target="_blank"> Kholil </a>
            </p>
        </div>
</div> 
<!--/ Login-->
    
</div>
<!-- scripts -->
<script src="js/particles.js"></script>
<script src="js/app.js"></script>


</body>

</html>