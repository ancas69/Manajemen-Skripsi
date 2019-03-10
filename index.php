<!DOCTYPE>  
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
  <style>
      body {
          position: relative; 
      }
      img { 
        max-width: 100%; 
        height: auto; 
      }
      .bgimage{
        background-image: url(desain/nav.jpg);
      }
      .kotak{
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,.0);
        /*meletakkan form ke tengah*/
        /*margin: 80px auto;*/
        border-radius: 30px;
        padding-top: 20px;
        padding-bottom: 20px;
        box-shadow: 0px 0px 10px 4px #d1d1d1;
      }
  </style>

    <title>MANAJEMEN SKRISPSI</title>
  </head>
<body class="bgimage">
<table width="100%" height="20%">
  <tr align="center">
    <td>
      <img src="desain/header.jpg">
    </td>
  </tr>
</table>
 
<table width="100%" height="10%">
  <tr align="">
    <td height="30%">
          <nav class="navbar navbar-expand-lg navbar-light bg-light bgimage border-bottom border-top">
            <a class="navbar-brand" href="#"><img src="desain/Logo.png" class="mr-1 mt-1 rounded-circle" style="width:35px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0" method="POST" action="index.php">
                <input name="nim" class="form-control mr-sm-2" type="search" placeholder="NIM" aria-label="Search">
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search NIM</button>
              </form>
            </div>
          </nav>
    </td>
   
  </tr>
</table>

<table width="100%" height="100%">

  <tr align="center">
    <td width="25%">
                  
    </td>

    <td width="50%" rowspan="" class="pt-4">
      <main  class="kotak" >
        <?php 
        if(isset($_POST['nim'])){
        include 'index_1.php';
        }else echo "<center><div class='alert alert-secondary' role='alert'>SILAHKAN MASUKKAN NIM
</div></center>";
        ?>
      </main>
    </td>

    <td rowspan="">
      
    </td>
  </tr>

  <tr height="10%">
    <td colspan="3">\
        <center>
          <div class="pb-4">
            <font size="2" face="arial">
              Copyright Programmer-fitur-Bimbingan-Skripsi
            </font> 
          </div>
        </center>
    </td>
  </tr>


</table>
</body>
</HTML>
