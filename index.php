<?php

// recoge los productos y los muestra en su seccion
require 'admin/config.php';
require 'funciones.php';

$conn = connection($db_config);
if (!$conn) {
    header('Location: 404.php');
}

$products = getProduct($erillamhc_config['product_per_page_home'], $conn);
if (!$products) {
    header('Location: 404.php');
}

$categories = getCategorie($conn);
if (!$products) {
    header('Location: 404.php');
}

require 'views/index.view.php';

?>
