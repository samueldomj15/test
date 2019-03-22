<?php

require 'admin/config.php';
require 'funciones.php';

$conn = connection($db_config);
$id_product = id_product($_GET['id']);

if (!$conn) {
    header('Location: 404.php');
}

if (empty($id_product)) {
    header ('Location: productos.php');
}

$product = getProductPerId($conn, $id_product);

if (!$product) {
    header('Location: productos.php');
}

$product = $product[0];

require 'views/producto.view.php';

?>
