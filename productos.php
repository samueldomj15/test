<?php

require 'admin/config.php';
require 'funciones.php';

$conn = connection($db_config);
if (!$conn) {
    header('Location: 404.php');
}

// obtiene los productos
$products = getProduct($erillamhc_config['product_per_page'], $conn);
if (!$products) {
    header('Location: 404.php');
}

// obtiene las categorias
$categories = getCategorie($conn);
if (!$products) {
    header('Location: 404.php');
}

require 'views/productos.view.php';

?>
