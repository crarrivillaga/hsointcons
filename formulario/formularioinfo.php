<?php

	include "conectardb.php";

    $destino = "carlosra210@gmail.com"; //Correo al cual llegaran los mail 
    $name = $_POST['name'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $tema = $_POST['tema'];
    $message = $_POST['mensaje'];

    $acc = mysqli_query($db, "INSERT INTO infodb(Nombre,Apellido,Email) values ('$name','$apellido','$email')");

    $contenido = 
    "Nombre: " . $name . 
    "\nApellido: " . $apellido . 
    "\nCorreo Electrónico: " . $email . 
    "\nTema: " . $tema . 
    "\nMensaje: " . $message;

    mail($destino,$tema,$contenido);

    if ($acc) {
        header("Location:gracias.html");
    } else {
        echo'Mal';
    }

?>