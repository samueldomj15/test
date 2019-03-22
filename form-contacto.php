<?php

$error = '';

// VALIDANDO NOMBRE
if (empty($_POST['nombre'])) {
    $error = "El campo nombre es requerido <br>";
} else {
    $name = $_POST['nombre'];
    $name = trim($name);
    $name = filter_var($name,  FILTER_SANITIZE_STRING);
}

// VALIDANDO APELLIDOS
if (empty($_POST['apellidos'])) {
    $error .= "El campo apellidos es requeridos <br>";
} else {
    $lastName = $_POST['apellidos'];
    $lastName = trim($lastName);
    $lastName = filter_var($lastName,  FILTER_SANITIZE_STRING);
}

// VALIDANDO EMAIL
if (empty($_POST['email'])) {
    $error .= "El campo correo electrónico es requerido <br>";
} else {
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error .= "Por favor ingresa un correo electrónico valido";
    } else {
        $email = filter_var($email, FILTER_SANITIZE_STRING);
    }
}

// VALIDANDO ASUNTO
if (empty($_POST['asunto'])) {
    $error .= "El campo asunto es requerido <br>";
} else {
    $subject = $_POST['asunto'];
    $subject = trim($subject);
    $subject = filter_var($subject,  FILTER_SANITIZE_STRING);
}

// VALIDANDO MENSAJE
if (empty($_POST['mensaje'])) {
    $error .= "El campo mensaje es requerido <br>";
} else {
    $message = $_POST['mensaje'];
    $message = trim($message);
    $message = filter_var($message,  FILTER_SANITIZE_STRING);
}

// Cuerpo del mensaje
$name = '';
$email = '';
$message = '';

$cuerpo = "Nombre: ".$name.'\n';
$cuerpo.= "Email: ".$email.'\n';
$cuerpo.= "Mensaje: ".$message.'\n';

// DIRECCION
$enviarA = 'samueldomj15@gmail.com'; // REMPLAZAR CORREO
$asunto = 'Nuevo mensaje del sitio web';

// ENVIAR CORREO
if ($error == '') {
    $success = mail($enviarA, $asunto, $cuerpo, 'de: '.$email);
    echo "exito";
} else {
    echo $error;
}

?>
