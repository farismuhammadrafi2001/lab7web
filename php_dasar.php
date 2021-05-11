<!DOCTYPE html>
<html>
<head>
    <title>]PHP Dasar</title>
</head>
<body>
    <form method="POST" name="frompost" action="">
        <table align="center" border="2" cellpadding="0" cellspacing="0">
        <tr align="center"><td><h2><b>Masukan data diri anda</b></h2></td>
        <tr>
           <td>
           <table width="450" border="0" cellpadding="0" cellspacing="10" align="center">
           <tr>
           <td>Nama</td>
           <td>:</td>
           <td><input type="text" name="nama[]" size="50"  /></td>
        </tr>
           <tr>
           <td>Tanggal Lahir</td>
           <td>:</td>
           <td><input type="text" name="Tanggal[]" size="50"  /></td>
        </tr>
        <tr>
        <td>posisi</td>
        <td><select name="jabatan">
            <option value="Leader">Leader</option>
            <option value="supervisor">Supervisor</option>
            <option value="Manager">Manager</option>
            <option value="Staff">Staff</option>
            <option value="Direktur">direktur</option>
        </select></td>
    </tr>
    <tr>
        <td colspan="5" align="center"><input type="submit" name="btnOK" value="kirim"></td>
    </tr>
</table>
</td>
</tr>
</tr>
</table>
</form>
<center>
    <table width="450" border="1" cellpadding="2" cellspacing="4">
<?php
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];

foreach ($nama as $key => $value) {?>
<tr>
  <td align="center" colspan="2">
    <?php
    echo '<b>Hasil Data diri anda</b><br>';?>
  </td>
  <tr>
    <td><?php echo 'nama'?></td>
    <td><?php echo $nama[$key];?></td>
  </tr>
  <td><?php echo 'umur';?></td>
  <td>
    <?php 
    $tanggal = new DateTime('12-09-2001');
    $today = new DateTime('11-05-2021');
    $y = $today->diff($tanggal)->y;
    $m = $today->diff($tanggal)->m;
    $d = $today->diff($tanggal)->d;
    echo "". $y . "tahun" . $m . "bulan" . $d . "hari";?>
  </td>
</tr>
<tr>
  <td><?php echo 'gaji';?></td>
  <td>
    <?php
    $posisi = $_POST["jabatan"];

    if ($posisi=="leader"){
    $posisiku="leader";}
    else if($posisi=="Supervisor"){
    $posisiku="Supervisor";}
    else
    {$posisiku="Manager";}
    echo "";
    if ($posisiku=="leader"){
    $gajifinal="5.000.000";}
    else if($posisiku=="Supervisor"){
    $gajifinal="8.000.000";}
    else
    {$gajifinal="10.000.000";}
?>

    echo " Rp. $gajifinal ";?>
  </td>
  </tr>
  <?php
}
?>
</table>
</center>
</html>