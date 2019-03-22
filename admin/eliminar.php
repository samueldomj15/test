<?php session_start();

require 'config.php';
require '../funciones.php';

checkSession();

$conn = connection($db_config);
if (!$conn) {
    header('Location: 404.php');
}

$id = clearData($_GET['id']);

if (!$id) {
    header('Location: ' . RUTA . 'admin');
}

$statement = $conn->prepare('DELETE FROM productos WHERE id_producto = :id');
$statement->execute(array('id' => $id));

header('Location: ' . RUTA . 'admin');

?>
