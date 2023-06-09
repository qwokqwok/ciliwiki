<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/bootstrap-5.3.0-alpha1-dist/css/bootstrap.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">   
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary position-relative">
            
            <div class="container-fluid">
                <img src="image/ciliwung2.png" alt="logo ciliwung" style="height:100px;width: 80px;margin-right: 10px; ">
              <a class="navbar-brand" href="index.php">Ciliwung Empire</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="ciliwung.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <div class="dropdown">
                    <button class="btn dropdown-toggle border-0 mt-1" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true"  aria-expanded="false">
                      Topik
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="lawan.php">Lawan</a></li>
                      <li><a class="dropdown-item" href="pemain.php">Karakter</a></li>                      
                    </ul>
                  </div>
                  </li>
         
                </ul>
              </div>
                  <a href="login.php" class="login">masuk</a>
                  <a href="daftar.php"class="login">daftar</a>    
                  <div class="dropdown">
                    <a class="btn border-0  <?php
                       if(isset($_COOKIE['name'])){
                           echo 'dropdown-toggle';
                       }
                       ?> 
                       " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                       <?php
                       if(!isset($_COOKIE['name'])){
                           echo 'disabled';
                       }
                       ?>>
                    <?php
                        if(isset($_COOKIE['name'])){
                            echo $_COOKIE['name'];                            
                        }else{
                            echo 'tamu';
                        }
                        ?>
                    </a>

                    <ul class="dropdown-menu" >
                          <li><a class="dropdown-item" href="logout.php" >logout</a></li>
                    </ul>
                    </div>
                     
            </div>
        </nav>

    </body>
    <script src="/bootstrap-5.3.0-alpha1-dist/js/bootstrap.js"></script>
    <script src="/bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script>
</html>
