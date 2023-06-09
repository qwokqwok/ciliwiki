<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device - width, initial-scale=1">
        <title>wiki ciliwung empire</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="tengah" action="<?php echo htmlspecialchars('proses_daftar.php');?>">
            <h1>Daftar ciliwiki</h1>
            <form method="post" action="proses_daftar.php">
                <label for="name">username</label>
                <input type="text" id="name" name="name" required maxlength="40" minlength="4">
                <label for="password">password</label>
                <input type="text" id="password" name="password" required maxlength="16" minlength="8">                
                <input type="submit" name="submit" value="Daftar">
            </form>
        </div>
    </body>
</html>
