<?php
   include "conn.php";
   $db = new Database();
   $connection = $db->conn;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Tugas - 7</title>
</head>
<body>
    
<?php
    class kuliah{
       private $connection = "";
       private $cmd = "";
       private $query = "";
       private $result = "";
       public $npm = "17081010055";
       public $data = "";

       function __construct($db){
           $this->connection = $db;
           $this->cmd = "select mahasiswa.npm,mahasiswa.nama,
           mahasiswa.prodi,mahasiswa.fakultas,mata_kuliah.nama_mk,mata_kuliah.sks,
           nilai.nilai from mahasiswa INNER JOIN nilai INNER JOIN mata_kuliah
           on mahasiswa.npm = nilai.npm AND mahasiswa.npm = $this->npm AND nilai.kode_mk = mata_kuliah.kode_mk";
           $this->result = $this->connection->query($this->cmd);
           $data = $this->result->fetch_assoc();
                echo "<h1> TRANSKRIP NILAI </h1>";
                echo "<h4>NPM &emsp;&emsp;&emsp;&emsp;&nbsp;:".$data["npm"]."</h4>";
                echo "<h4>Nama &emsp;&emsp;&emsp;&emsp;:".$data["nama"]."</h4>";
                echo "<h4>Program studi &nbsp;&nbsp;:".$data["prodi"]."</h4>";
                echo "<h4>Fakultas &emsp;&emsp;&emsp;:".$data["fakultas"]."</h4>";
            
            echo "<table border='1'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>NPM</th>";
            echo "<th>Nama</th>";
            echo "<th>Prodi</th>";
            echo "<th>Mata Kuliah</th>";
            echo "<th>Nilai</th>";
            echo "</tr>";
            echo "</thead>";

            $sks = 0;
            $ips = 0;
            $this->result = $this->connection->query($this->cmd);
            while ($row = $this->result->fetch_assoc())
            {
                echo "<tr>";
 					echo "<td>".$row['npm']."</td>";
 					echo "<td>".$row['nama']."</td>";
 					echo "<td>".$row['prodi']."</td>";
 					echo "<td>".$row['nama_mk']."</td>";
 					echo "<td>".$row['nilai']."</td>";
                 echo "</tr>";
                 
                 $sks += (int)$row['sks'];
                switch ($row['nilai']) {
                    case 'A':
                        $nilai = 4;
                        break;
                    case 'B':
                        $nilai = 3;
                        break;
                    case 'C':
                        $nilai = 2;
                        break;
                    case 'D':
                        $nilai = 1;
                        break;
                    case 'E':
                        $nilai = 0;
                        break;
                }
                $ips += $nilai*(int)$row['sks'];
            }
            echo "</table>";
            echo "<h3>Nilai => ".$ips." </hr> <br>"; echo "<h3>SKS &nbsp;=> 3 x 5 = ".$sks." </hr> <br>"; echo "<h3>IPS &nbsp;&nbsp;=> $ips / $sks = ".$ips/$sks."</h3>";
            }
       }
   $kuliah = new kuliah($connection);
?>

</body>
</html>