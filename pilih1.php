<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RESPONSI PWEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="modif.css">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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

<div class="contact">
  Form Pesan
</div><br>

    <div align="center" class="size2">Mobil+Driver+BBM</div>
    <br>
      <form name="form1" method="post" action="form1.php">
        <table width="58%" border="0" align="center">
          <tr>
            <td>Nama Lengkap</td>
            <td><input name="nama" type="text" id="nama"></td>
          </tr>

          <tr>
            <td>Alamat</td>
            <td><input name="alamat" type="text" id="alamat"></td>
          </tr>

          <tr>
            <td>E-Mail</td>
            <td><input name="email" type="text" id="email"></td> </tr>
          </tr>

          <tr>
            <td>No. HP</td>
            <td><input name="no" type="text" id="no"></td> </tr>
          </tr>

          <tr>
            <td>Jenis Mobil - Biaya</td>
            <td>
              <select name="jenis" id="jenis">
                <option>Avanza - Rp 300.000</option>
                <option>New Avanza - Rp 350.000</option>
                <option>Grand New Avanza - Rp 400.000</option>
                <option>Grand New Innova - Rp 450.000</option>
                <option>Innova Reborn - Rp 550.000</option>
                <option>Xenia - Rp 350.000</option>
                <option>New Xenia - Rp 300.000</option>
                <option>Luxio - Rp 300.000</option>
              </select>
            </td>
          </tr>

          <tr>
            <td>Durasi - Biaya </td>
            <td>
              <select name="harga" id="harga">
                <option>4 jam - (+ Rp 50.000)</option>
                <option>6 jam - (+ Rp 100.000)</option>
                <option>12 jam - (+ Rp 150.000)</option>
                <option>18 jam - (+ Rp 200.000)</option>
              </select>
            </td>
          </tr>

          <tr>
            <td></td>
            <td><input class="btn btn-primary me-2" type="submit" name="Submit" value="input"><input class="btn btn-primary" type="reset" name="Submit2" value="Batal">
          </td>
          </tr>
        </table>
      </form>
  </body>
</html>