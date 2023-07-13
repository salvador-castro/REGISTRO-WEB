<?php

$servername = "localhost";
$database = "registro";
$username = "root";
$password = "root";
// Create connection
$conex = mysqli_connect($servername, $username, $password, $database);

if(isset($_POST['register'])){
     if (
         strlen($_POST['name']) >= 1 &&
         strlen($_POST['email']) >= 1 &&
         strlen($_POST['direction']) >= 1 &&
         strlen($_POST['phone']) >= 1 &&
         strlen($_POST['password']) >= 1
     ){
         $name = trim($_POST['name']);
         $email = trim($_POST['email']);
         $direction = trim($_POST['direction']);
         $password = trim($_POST['password']);
         $phone = trim($_POST['phone']);
         $fecha = date("d/m/y");
         $consulta = "INSERT INTO datos(nombre, email, direction, telefono, password, fecha)
VALUES('$name','$email', $direction, $phone, '$password', '$fecha')";
         $resultado = mysqli_query($conex, $consulta);
         if($resultado){
             ?>
                <h3 class="success">Registro completo</h3>
            <?php
         }else{
             ?>
                <h3 class="error">Ocurrio un error</h3>
            <?php
         }
     }else{
         ?>
                <h3 class="error">Llena todos los campos</h3>
            <?php
     }
 }