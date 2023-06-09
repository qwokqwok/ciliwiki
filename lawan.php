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
                <a class="list-group-item " href="#pengenalan">Daftar Lawan</a>
                </div>
              </div>

            <div style="width: 84%;height: px;padding: 10px;" data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0"data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                <div id="pengenalan">
                    <h1>Lawan</h1>
                <hr>
                <p>
                   Dalam Ciliwung Empire ada beberapa lawan yang akan ditemui ketika mulai berjalan/berpetualang. Tiap monster memiliki
                   status yang berbeda-beda, mulai dari yang paling lemah hingga yang paling kuat. berikut daftar status Lawan:
                </p>
                <table >                    
                    <tr >
                        <td>nama</td>
                        <td>nyawa</td>
                        <td>serangan minimal</td>
                        <td>serangan maksimal</td>
                    </tr>
                    <tr >
                        <td>Boss</td>
                        <td>5</td>
                        <td>1</td>
                        <td>9</td>
                    </tr>
                    <tr >
                        <td>Goblin</td>
                        <td>10</td>
                        <td>1</td>
                        <td>2</td>
                    </tr>
                    <tr >
                        <td>Elf</td>
                        <td>10</td>
                        <td>3</td>
                        <td>5</td>
                    </tr>
                    <tr >
                        <td>Slime</td>
                        <td>1</td>
                        <td>0</td>
                        <td>1</td>
                    </tr>
                    <tr >
                        <td>centaur</td>
                        <td>10</td>
                        <td>2</td>
                        <td>3</td>
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
