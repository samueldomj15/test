<?php

session_start();

require 'config.php';
require '../funciones.php';

checkSession();

$conn = connection($db_config);
if (!$conn) {
    header('Location: 404.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name_category = clearData($_POST['nombre_categoria']);

    $statement = $conn->prepare('INSERT INTO categorias (id_categoria, nombre_categoria) VALUES (null, :nombre_categoria)');

    $statement->execute(array(
        ':nombre_categoria' => $name_category
    ));

    header('Location: ' . RUTA . 'admin');
}

require '../views/agregar_categoria.view.php';

?>
