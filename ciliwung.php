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
    <body class="utama" >        
        <?php
        include 'header.php';
        ?>
        <div class="container-fluid" style="display:flex;padding: 0px;height: fit-content;">
            <div class="sidenav col-2">
                <div id="list-example" class="list-group sticky-top  ">
                <a class="list-group-item " href="#pengenalan">Pengenalan</a>
                <a class="list-group-item " href="#cara">Cara Bermain</a>
                <a class="list-group-item " href="#pemilihan">Pemilihan Karakter</a>
                <a class="list-group-item " href="#gameplay">Permainan</a>
                </div>
              </div>
            <div class="isi" data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" tabindex="0" >
                <h1>Ciliwung Empire</h1>
                <hr>
                <div id="pengenalan">
                    <h2>Pengenalan</h2>
                                    <hr>
                <p>
                    Ciliwung empire adalah suatu game berbasis turn-based rpg yang dibuat oleh M. Thoriq R. bersama dengan Affan N.S.A.G sebagai 
                    tugas proyek pada saat UAS mata kuliah pemrograman mobile. Aplikasi ini dibuat menggunakan IDE Android Studio dan
                    belum dirilis untuk umum karena masih dalam tahap perkembangan.                    
                </p>
                <img src="/image/ciliwung2.png" alt="pilih">
                </div>  
                <div id="cara">
                    <h2>Cara Bermain</h2>
                <hr>
                <p>
                    Cara bermain aplikasi ciliwung empire terbilang cukup mudah tanpa memikirkan strategi maupun perhitungan, hanya
                    membutuhkan keberuntungan(untuk saat ini).Namun sebelum bermain harus memilih karakter dahulu. Karena berbasis turn-base maka 
                    pemain dan lawan akan menyerang secara bergantian hingga nyawa salah satu dari mereka habis.
                </p>                              
                </div>  
                <div id="pemilihan">
                    <h2>Pemilihan karakter</h2>
                    <p>Setelah menekan tombol play pengguna akan diarahkan untuk memilih satu 
                    dari beberapa kelas karakter yang akan digunakan dalam permainan nanti, tiap karakter memiliki status yang berbeda 
                    mulai dari nyawa dan serangan (lebih lengkap klik <a href="pemain.php">karakter</a>)
                    
                    </p>                    
                    <img src="/image/pilihchar.jpg" alt="pilih" >
                </div>
                <div id="gameplay">
                    <h2>Permainan</h2>
                    <p>
                        setelah memilih karakter, pemain akan berada pada home yaitu lokasi awal sebelum karakter berpetualang. Untuk
                        memulai perjalanan klik tombol walk, jika bertemu lawan akan masuk pada gameplay. Gameplay merupakan tampilan ketika 
                        sedang bertarung dengan monster yang ditemui ketika sedang melakukan perjalanan (Lebih lengkap klik <a href="lawan.php">Monster</a>. Pemain harus mengalahkan monster 
                        agar dapat melanjutkan perjalanan dengan mengklik tombol attack, jika nyawa lawan 0 maka pemain menang, namun jika sebaliknya 
                        pemain dinyatakan kalah.
                    </p>                    
                    <img src="/image/home.jpg" alt="pilih" >
                    <img src="/image/main.jpg" alt="pilih" >
                </div>
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
