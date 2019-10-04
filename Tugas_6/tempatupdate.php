<?php
include 'koneksi.php';

$no = $_GET['no']; //get the no which will updated
$query = "SELECT * FROM data_ku WHERE no = $no"; //get the data that will be updated
$hasil = mysqli_query(connection(),$query);
$data  = mysqli_fetch_array($hasil);
?>

<form method="post" action="prosesupdate.php">
<table width="500" border="0" cellpadding="2" cellspacing="2">
  <tr bgcolor="orange">
	<td height="21" colspan="3">
     <strong> Form Update</strong>
    </td>

  <tr>
  	<td width="23%"> no </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" name="no" disabled='disable' value="<?php echo $data['no']; ?>"> </td>
  </tr>

  <tr>
  	<td>var1</td>
    <td>:</td>
    <td> <input type="text" name="var1" value="<?php echo $data['var1']; ?>"> </td>
  </tr>

  <tr>
  	<td>var2</td>
    <td>:</td>
    <td> <input type="text" name="var2" value="<?php echo $data['var2']; ?>"> </td>
  </tr>

  <tr>
  	<td>var3</td>
    <td>:</td>
    <td> <input type="text" name="var3" value="<?php echo $data['var3']; ?>"> </td>
  </tr>

  <tr>
  	<td>var4</td>
    <td>:</td>
    <td> <input type="text" name="var4" value="<?php echo $data['var4']; ?>"> </td>
  </tr>

  <tr>
  	<td>var5</td>
    <td>:</td>
    <td> <input type="text" name="var5" value="<?php echo $data['var5']; ?>"> </td>
  </tr>

  <tr>
  	<td>var6</td>
    <td>:</td>
    <td> <input type="text" name="var6" value="<?php echo $data['var6']; ?>"> </td>
  </tr>

  <tr>
  	<td>var7</td>
    <td>:</td>
    <td> <input type="text" name="var7" value="<?php echo $data['var7']; ?>"> </td>
  </tr>
  <tr>
  	<td>var8</td>
    <td>:</td>
    <td> <input type="text" name="var8" value="<?php echo $data['var8']; ?>"> </td>
  </tr>
  <tr>
  	<td>var9</td>
    <td>:</td>
    <td> <input type="text" name="var9" value="<?php echo $data['var9']; ?>"> </td>
  </tr>
  <tr>
  	<td>var10</td>
    <td>:</td>
    <td> <input type="text" name="var10" value="<?php echo $data['var10']; ?>"> </td>
  </tr>
  <tr>
  	<td>var11</td>
    <td>:</td>
    <td> <input type="text" name="var11" value="<?php echo $data['var11']; ?>"> </td>
  </tr>
  <tr>
  	<td>var12</td>
    <td>:</td>
    <td> <input type="text" name="var12" value="<?php echo $data['var12']; ?>"> </td>
  </tr>
  <tr>
  	<td>var13</td>
    <td>:</td>
    <td> <input type="text" name="var13" value="<?php echo $data['var13']; ?>"> </td>
  </tr>
  <tr>
  	<td>var14</td>
    <td>:</td>
    <td> <input type="text" name="var14" value="<?php echo $data['var14']; ?>"> </td>
  </tr>
  <tr>
  	<td>var15</td>
    <td>:</td>
    <td> <input type="text" name="var15" value="<?php echo $data['var15']; ?>"> </td>
  </tr>
  <tr>
  	<td>var16</td>
    <td>:</td>
    <td> <input type="text" name="var16" value="<?php echo $data['var16']; ?>"> </td>
  </tr>
  <tr>
  	<td>var17</td>
    <td>:</td>
    <td> <input type="text" name="var17" value="<?php echo $data['var17']; ?>"> </td>
  </tr>
  <tr>
  	<td>var18</td>
    <td>:</td>
    <td> <input type="text" name="var18" value="<?php echo $data['var18']; ?>"> </td>
  </tr>
  <tr>
  	<td>var19</td>
    <td>:</td>
    <td> <input type="text" name="var19" value="<?php echo $data['var19']; ?>"> </td>
  </tr>
  <tr>
  	<td>var20</td>
    <td>:</td>
    <td> <input type="text" name="var20" value="<?php echo $data['var20']; ?>"> </td>
  </tr>
  <tr>
  	<td>var21</td>
    <td>:</td>
    <td> <input type="text" name="var21" value="<?php echo $data['var21']; ?>"> </td>
  </tr>
  <tr>
  	<td>var22</td>
    <td>:</td>
    <td> <input type="text" name="var22" value="<?php echo $data['var22']; ?>"> </td>
  </tr>
  <tr>
  	<td>var23</td>
    <td>:</td>
    <td> <input type="text" name="var23" value="<?php echo $data['var23']; ?>"> </td>
  </tr>
  <tr>
  	<td>var24</td>
    <td>:</td>
    <td> <input type="text" name="var24" value="<?php echo $data['var24']; ?>"> </td>
  </tr>
  <tr>
  	<td>var25</td>
    <td>:</td>
    <td> <input type="text" name="var25" value="<?php echo $data['var25']; ?>"> </td>
  </tr>
  <tr>
  	<td>var26</td>
    <td>:</td>
    <td> <input type="text" name="var26" value="<?php echo $data['var26']; ?>"> </td>
  </tr>

<tr>
  	<td></td> <td></td> <td> <input type="hidden" name="no" value="<?php echo $data['no']; ?>">
  	<input type="SUBMIT" name="SUBMIT" value="Save"></td>
  </tr>
</table>
</form>