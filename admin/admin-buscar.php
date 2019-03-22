<?php session_start();

require 'config.php';
require '../funciones.php';

$conn = connection($db_config);
if (!$conn) {
    header('Location: 404.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['search'])) {
    $search = clearData($_GET['search']);

    $statement = $conn->prepare(
        'SELECT pro.*, cat.nombre_categoria FROM productos pro INNER JOIN categorias cat ON pro.id_categoria = cat.id_categoria WHERE pro.nombre_producto LIKE :search OR pro.descripcion LIKE :search OR cat.nombre_categoria LIKE :search;'
    );
    $statement->execute(array(':search' => "%$search%"));
    $result = $statement->fetchAll();

    if (empty($result)) {
        $title = 'No se encontraron productos con el resultado: ' . $search;
    } else {
        $title = 'Resultados de la busqueda: ' . $search;
    }
} else {
    header('Location: ' . RUTA . 'admin');
}

require '../views/admin-buscar.view.php';

?>
