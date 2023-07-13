<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="post">
    <h2>Hola</h2>
    <p>Inicia tu registro</p>

    <div class="input-wrapper">
        <input type="text" name="name" placeholder="Nombre" required>
        <img src="images/name.svg" alt="name" class="input-icon">
    </div>

    <div class="input-wrapper">
        <input type="email" name="email" placeholder="Email" required>
        <img src="images/email.svg" alt="email" class="input-icon">
    </div>

    <div class="input-wrapper">
        <input type="text" name="direction" placeholder="Direccion" required>
        <img src="images/direction.svg" alt="direction" class="input-icon">
    </div>

    <div class="input-wrapper">
        <input type="tel" name="phone" placeholder="Telefono" required>
        <img src="images/phone.svg" alt="phone" class="input-icon">
    </div>

    <div class="input-wrapper">
        <input type="password" name="password" placeholder="Contraseña" required>
        <img src="images/password.svg" alt="password" class="input-icon">
    </div>

    <input class="btn" type="submit" name="register" value="Enviar">
</form>

<?php
    include("registrar.php")
?>
</body>
</html>