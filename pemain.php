<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="image/ciliwung2.png" type="image"
        <link href="/bootstrap-5.3.0-alpha1-dist/css/bootstrap.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <title>wiki ciliwung empire</title>

    </head>
    <body class="utama" data-bs-spy="scroll" data-bs-target="#navbar-example">        
        <?php
        include 'header.php';
        ?>
        <div class="container-fluid" style="display:flex;padding: 0px;height: fit-content;">
            <div class="sidenav col-2">
                <div id="list-example" class="list-group sticky-top  ">
                <a class="list-group-item " href="#pengenalan">Daftar Karakter</a>
                </div>
              </div>

            <div style="width: 84%;height: px;padding: 10px;" data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0"data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                <div id="pengenalan">
                    <h1>Ciliwung Empire</h1>
                <hr>
                <p>
                    Ciliwung empire adalah suatu game berbasis turn-based rpg yang dibuat oleh M. Thoriq R. bersama dengan Affan N.S.A.G sebagai 
                    tugas proyek pada saat UAS mata kuliah pemrograman mobile
                </p>
                <table >                    
                    <tr >
                        <td>nama</td>
                        <td>nyawa</td>
                        <td>serangan minimal</td>
                        <td>serangan maksimal</td>
                    </tr>
                    <tr >
                        <td>Fighter</td>
                        <td>10</td>
                        <td>1</td>
                        <td>3</td>
                    </tr>
                    <tr >
                        <td>Mage</td>
                        <td>5</td>
                        <td>3</td>
                        <td>7</td>
                    </tr>
                    <tr >
                        <td>Swordsman</td>
                        <td>7</td>
                        <td>3</td>
                        <td>5</td>
                    </tr>
                    <tr >
                        <td>Maksman</td>
                        <td>5</td>
                        <td>3</td>
                        <td>6</td>
                    </tr>                    
                </table>
                </div>  
                
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
