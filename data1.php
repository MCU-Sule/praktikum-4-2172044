<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body align="center">
    <h1>Form inputan berhasil diterima</h1>
    <br>
    Nama saya adalah <?=$_POST ["namalengkap"];?>
<br>
   Email saya yaitu <?= $_POST ["email"];?>
<br>
   
    Nomer hp saya adalah  <?= $_POST ["ponsel"];?>

    <br>
    Hobby saya yaitu <?= $_POST ["hobby"];?>
    <br>
    Deskripsi diri saya adalah <?= $_POST ["tentang"];?>
    
<br>
</body>
</html>