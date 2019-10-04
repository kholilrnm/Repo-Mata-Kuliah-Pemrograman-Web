<?php
include "koneksi.php";
//get the value from form update

$no = $_POST['no'];
$abc = $_POST['var1'];
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

//query for update data in database
 $query = "UPDATE data_ku SET var1='$abc', var2='$var2', var3='$var3', var4='$var4', var5='$var5', var6='$var6', var7='$var7', var8='$var8', var9='$var9', var10='$var10', var11='$var11', var12='$var12', var13='$var13', var14='$var14', var15='$var15', var16='$var16', var17='$var17', var18='$var18', var19='$var19', var20='$var20', var21='$var21', var22='$var22', var23='$var23',
      var24='$var24', var25='$var25', var26='$var26' WHERE no='$no'";

 $hasil = mysqli_query(connection(), $query);
 //see the result

 if($hasil){
     header('Location: table_from_db.php');
 }
 

?>