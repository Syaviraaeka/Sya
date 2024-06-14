<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Registrasi</title>
</head>
<body>
    <h1>Form Registrasi</h1>
    <form action="hasil3.php" method="post">
    <pre>
    Nama            :<input type="text" name="Nama">
    Alamat          :<textarea name="Alamat" rown="5" cols="40"></textarea>
    TempatLahir     :<input type="text" name="TempatLahir">
    TanggalLahir    :<input type="date" class="form-control" required name="TanggalLahir">
    JenisKelamin    :<input type="radio" name="JenisKelamin" value="Perempuan"> Perempuan <input type="radio"name="JenisKelamin" value="Laki - laki"> Laki - laki
    Pendidikan      :<select name="pendidikan"> <option value="-pilih-"> <option velue="S1">S1 <option value="D3">D3 <option value="SMA/SMK">SMA/SMK </select>
    </pre>      
    <input type="submit" value="Submit"><input type="reset" value="Cancle">

</body>
</html>