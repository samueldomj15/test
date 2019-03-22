<?php session_start();

require 'admin/config.php';
require 'funciones.php';

$error = '';

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $email = clearData($_POST['email']);
//     $password = clearData($_POST['password']);
//
//     if ($email == $erillamhc_admin['email'] && $password == $erillamhc_admin['password']) {
//         $_SESSION['admin'] = $erillamhc_admin['email'];
//         header('Location: ' . RUTA . 'admin');
//     }
// }


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = clearData($_POST['email']);
    $password = clearData($_POST['password']);

    if ($email == $erillamhc_admin['email'] && $password == $erillamhc_admin['password']) {
        $_SESSION['admin'] = $erillamhc_admin['email'];
        header('Location: ' . RUTA . 'admin');
    } else {
        $error .= 'Credenciales incorrectas';
    }

}

require 'views/login.view.php';

?>
