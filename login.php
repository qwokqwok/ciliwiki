<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device - width, initial-scale=1">
         <title>wiki ciliwung empire</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>        
        <?php
        if (isset($_COOKIE['name']) && isset($_COOKIE['password'])) {
            header('Location:index.php');   
        }
        ?>
        
        <div class="tengah">
            <h1>Login Ciliwiki</h1>
            <form method="post" action="<?php echo htmlspecialchars('proses_input.php');?>">
                <label for="name">username</label>
                <input type="text" id="name" name="name" required maxlength="40" minlength="4">
                <label for="password">password</label>
                <input type="text" id="password" name="password" required maxlength="16" minlength="8">
                
                <input type="submit" name="submit" value="Masuk">
            </form>
            <p>belum memiliki akun klik <a href="daftar.php">daftar</a> </p>
        </div>
    </body>
</html>
