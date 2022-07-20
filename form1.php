<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RESPONSI PWEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="modif.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  </head>
  <body>
  	  	  	<nav class="navbar fixed-top navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Danial Rental Mobil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br>

<?php 

$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
$no = $_POST['no'];

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("nota.txt", "a+");
fputs($fp, "NOTA \n\n");
fputs($fp, "Nama : $nama\n");
fputs($fp, "Alamat : $alamat\n");
fputs($fp, "E-mail : $email\n");
fputs($fp, "No. HP : $no\n");
fputs($fp, "Jenis mobil - biaya : $jenis\n");
fputs($fp, "Durasi - biaya : $harga  \n\n");
fclose($fp);

 ?>

 <div class="size2">TERIMA KASIH</div>
 <div class="tarif">
	Pencet tombol di bawah untuk kembali ke menu utama :<br><br>
</div>
<center>
	<a href="index.html" class="btn btn-primary">Home</a>
</center>
</body>
</html>