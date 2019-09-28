<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array - Foreach PHP</title>
    <meta name="author" content="Kholil">
</head>
<body>
    <?php
        if(isset($_POST['banyak_data']) && ($_POST['npm']) && ($_POST['nama'])&&($_POST['alamat'])){
    ?>
    <table border=0>
    <tr style="background-color:#f59542; border:0"><b>
       <td><strong> No </strong></td>
       <td><strong> Npm </strong></td>
       <td><strong> Nama </strong></td>
       <td><strong> Alamat </strong></td>
    </tr></b>
    <tr>
        <?php
        for ($i=1; $i<=$_POST['banyak_data']; $i++) {
            $data[$i] = array("No"=>$i, "Npm"=>$_POST['npm'].-$i, "Nama"=>$_POST['nama'].$i, "Alamat"=>$_POST['alamat'].$i);
            }

            foreach($data as $array){
                echo "<tr>";
            foreach($array as $key => $value){
                echo "<td> $value </td>";
                }
            }
        ?>
    </tr>
    
    <?php
        }    
        else{
            echo 
        '<form action="index.php" method="POST">
            Masukkan Npm <br><input type="text" name="npm" required/><br><br>
            Masukkan Nama <br><input type="text" name="nama" required/><br><br>
            Masukkan Alamat <br><input type="text" name="alamat" required/><br><br>
            Masukkan Banyak Data <br><input type="number" name="banyak_data" min="1" required/><br><br>
            <button type="submit">Kirim</button>
        </form>';        
        }
    ?>
</body>
</html>