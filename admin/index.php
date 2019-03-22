<?php session_start();

// INDEX DEL ADMIN

require 'config.php';
require '../funciones.php';

$conn = connection($db_config);
if (!$conn) {
    header('Location: ../404.php');
}

checkSession();

$products = getProduct($erillamhc_config['product_per_page'], $conn);

require '../views/admin-index.view.php';

?>
