<?php

    include 'class_bs.php';
  
    $car = new Bimbingan_skripsi();
    $car->connect();
    
    if (isset($_POST['nma'])) {

        $nama = $_POST['nma'];
        $nim = $_POST['nm'];
        $judul = $_POST['jdl'];
        $materi = $_POST['materi'];
        $tanggal = $_POST['tanggal'];
        $dosen = $_POST['dosbing'];

        $car->masuk_ke_log($nama,$nim,$dosen,$materi,$tanggal);    
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <center>
      <table width="70%" align="center">
        <tr>
          <td><br></td>
        </tr>
        <tr>
          <td align="center"> 
            <!-- <form method="POST" action="index.php">
              nim : <input type="text" name="nim">
            </form> -->
          </td>
        </tr>
        <tr>
          <td><br></td>
        </tr>
        <tr>
          <td>
              <?php
                if(isset($_POST['nim']))
                {
                  $nim = $_POST['nim'];

                  
                  $u=$car->show_data($nim);


                  foreach ($u as $ke) {
                    
                    echo "
                        <form method='POST' action='index.php'>
                          <div class='form-group'>
                            <label for='exampleFormControlInput1'>Nama Mahasiswa</label>
                            <input type='text' name='nma' class='form-control' id='exampleFormControlInput1' value=$ke[name] readonly>
                          </div>
            </td>
          </tr>

          <tr>
            <td>
                          <div class='form-group'>
                            <label for='exampleFormControlInput1'>Nomer Induk Mahasiswa</label>
                            <input type='text' name='nm' class='form-control' id='exampleFormControlInput1' value=$ke[nim] readonly>
                          </div>
            </td>
          </tr>

          <tr>
            <td>             
                          <div class='form-group'>
                            <label for='exampleFormControlInput1'>Judul Skripsi Mahasiswa</label>
                            <input type='text' name='jdl' class='form-control' id='exampleFormControlInput1' value=$ke[judul] readonly>
                          </div>
            </td>
          </tr>

          <tr>
            <td>
                          <div class='form-group'>
                            <label for='exampleFormControlInput1'>Dosen Pembimbing Mahasiswa</label>
                            <input type='text' name='dosbing' class='form-control' id='exampleFormControlInput1' value=$ke[namdos] readonly>
                          </div>
            </td>        
          </tr>

          <tr>
            <td>
                          <div class='form-group'>
                            <label for='exampleFormControlInput1'>Tanggal Mahasiswa Melakukan Bimbingan</label>
                            <input type='date' name='tanggal' class='form-control' id='exampleFormControlInput1' >
                          </div>
            </td>
          </tr>

          <tr>
            <td>
                          <div class='form-group'>
                            <label for='exampleFormControlTextarea1'>Materi Bimbingan Mahasiswa</label>
                            <textarea class='form-control' name='materi' id='exampleFormControlTextarea1' rows='3'></textarea>
                          </div>
            </td>
          </tr>

          <tr>
            <td>
                          <button type='submit' class='btn btn-secondary btn-lg btn-block'>SAVE</button>
            </td>
          </tr>              
                        </form>

                      ";  
                    
                  }
                }
              ?>
      </table>
    </center>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
      </body>
</html>