<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<table width="100%" height="100%" cellpadding="20">
  <tr>
    <td>

<div class="container">

  <h2>Log Bimbingan Skripsi</h2>
  <p>berikut merupakan dafar riwayat bimbingan mahasiswa : </p>            
  <table class="table table-dark table-striped" align="center">
    <thead>
      <tr align="center">
        <th>NAMA</th>
        <th>NIM</th>
        <th>DOSEN PEMBIMBING</th>
        <th>MATERI BIMBINGAN</th>
        <th colspan="2" align="center">WAKTU BIMBINGAN</th>
      </tr>
      <tr align="center">
        <th colspan="4"></th>
        <th align="center">tanggal</th>
        <th align="center">jam mulai</th>
      </tr>
    </thead>
    <tbody align="center">

      <?php
      $g = $car->select_one_mahasiswa($id);

      foreach($g as $key)
      {
        echo"
          <tr>
            <td>$key[namaa]</td>
            <td>$key[Nm]</td>
            <td>$key[namdis]</td>
            <td>$key[materi_bimbingan]</td>
            <td>$key[tanggal_bimbingan]</td>
            <td>$key[jam]</td>
          </tr>
        ";
      }
      ?>
    </tbody>
  </table>
</div>
<br>
<br>
<center>
  <a class="btn btn-primary" href="index.php" role="button">BACK</a>
</center>
    </td>
  </tr>
    
</table>

</body>
</html>
