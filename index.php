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
  </style>

    <title>MANAJEMEN SKRISPSI</title>
  </head>
<body>
<table width="100%" height="20%">
  <tr align="center">
    <td>
      <img src="desain/header.jpg">
    </td>
  </tr>
</table>

<table border="0" width="100%" height="0%" >
  <tr align="">
    <td>
      <nav class="navbar sticky-top navbar-light bg-light">
  <a class="navbar-brand" href="#">Sticky top</a>
</nav>
        <!-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark">  
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#section1">Section 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#section2">Section 2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#section3">Section 3</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Section 4
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#section41">Link 1</a>
                <a class="dropdown-item" href="#section42">Link 2</a>
              </div>
            </li>
          </ul>
        </nav>     -->  
    </td>
   
  </tr>
</table>

<table border="1" width="100%" height="100%">

  <tr align="center">
    <td width="25%">
      <nav class="navbar navbar-dark bg-dark">
      <table width="80%">
        <tr align>
          <td>
            <br>
  <!-- Navbar content -->

              <form class="form-inline" method="POST" action="index.php">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">NIM</span>
                  </div>
                  <input type="text" name="nim" class="form-control" placeholder="search NIM" aria-label="NIM" aria-describedby="basic-addon1">
                </div>
              </form>
            
<!--             <form class="form-inline my-2 my-lg-0" method="POST" action="index.php" class="align-middle">
              <div class="input-group-prepend" class="align-middle">
                <div class="input-group-text">NIM</div>
              </div>
              <input class="form-control mr-sm-2" name="nim" type="search" placeholder="Search" aria-label="Search">
            </form>  -->   
          </td>
        </tr>
      </table>   
      </nav>               
    </td>

    <td width="50%" rowspan="2">
      <main>
        <?php 
        if(isset($_POST['nim'])){
        include 'index_1.php';
        }else echo "<center>SILAHKAN MASUKKAN NIM</center>";
        ?>
      </main>
      <br>
      <br>
    </td>

    <td rowspan="2">
      
    </td>
  </tr>

  <tr>
    <td width="25%" height="86%">
      
    </td>


  </tr>

  <tr height="20%">
    <td colspan="3">
        <br>
        <br>
        <br>
    </td>
  </tr>


</table>
</body>
</HTML>
