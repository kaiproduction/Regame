<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regame</title>
    <link rel="stylesheet" href="game.css">
    <link rel="shortcut icon" href="uploads/png-transparent-logo-brand-font-logos-logo-art-brand.png" type="uploads/png-transparent-logo-brand-font-logos-logo-art-brand">
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"></form>
    <input form="username" type="text">
    <input form="password" type="text">
    <input form="verify password" type="text">
    <button name="submit"></button>
</body>
</html>