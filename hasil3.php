<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Data Registrasi</title>
</head>
<body>
    <h1> Data Registrasi </h1>
<?php
$Nama =$_POST['Nama'];
$Alamat =$_POST['Alamat'];
$TempatLahir =$_POST['TempatLahir'];
$TanggalLahir =$_POST['TanggalLahir'];
$JenisKelamin =$_POST['JenisKelamin'];
$Pendidikan =$_POST['pendidikan'];
?>
<table border=1 bgcolor="Cyan">
<tr>
<td colspan=2 align="center"><b>Data Registrasi</b></td>
</tr>
<tr>
<td>Nama</td><td><?php echo $Nama;?></td>
</tr>
<td>Alamat</td><td><?php echo $Alamat;?></td>
</tr>
<td>Tempat Lahir</td><td><?php echo $TempatLahir;?></td>
</tr>
<td>Tanggal Lahir</td><td><?php echo $TanggalLahir;?></td>
</tr>
<td>Jenis Kelamin</td><td><?php echo $JenisKelamin;?></td>
</tr>
<td>Pendidikan</td><td><?php echo $Pendidikan;?></td>
</tr></table>
</body>
</html>