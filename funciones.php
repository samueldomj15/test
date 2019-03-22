 <?php

// conexion a la base de datos
function connection ($db_config) {
    try {
        $connection = new PDO('mysql:host='.$db_config['host'].';dbname='.$db_config['database'], $db_config['user'], $db_config['pass']);
        $connection->exec('SET NAMES utf8');
        return $connection;
    } catch (PDOException $e) {
        return false;
    }
}

// limpia los campos en blanco y borra signos
function clearData($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// página actual
function page_current() {
    return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

// obtiene producto de la base de datos - por página
function getProduct($product_per_page, $connection) {
    $start = (page_current() > 1) ? page_current() * $product_per_page - $product_per_page : 0;
    $declaration = $connection->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM (SELECT * FROM productos LIMIT $start, $product_per_page) pro INNER JOIN categorias cat ON pro.id_categoria = cat.id_categoria");
    $declaration->execute();
    return $declaration->fetchAll();
}

function number_pages($product_per_page, $connection) {
    $total_product = $connection->prepare('SELECT COUNT(*) AS total FROM productos pro INNER JOIN categorias cat ON cat.id_categoria = pro.id_categoria;');
    $total_product->execute();
    $total_product = $total_product->fetch()['total'];

    $number_pages = ceil($total_product / $product_per_page);
    return $number_pages;
}

// obtiene categorias de la base de datos
function getCategorie($connection) {
    $declaration = $connection->prepare("SELECT * FROM categorias");
    $declaration->execute();
    return $declaration->fetchAll();
}

// Obtiene el id del productos
function id_product($id) {
    return (int)clearData($id);
}

// obtiene el producto por id
function getProductPerId($connection, $id) {
    $result = $connection->query("SELECT * FROM (SELECT * FROM productos WHERE id_producto = $id LIMIT 1) pro INNER JOIN categorias cat ON pro.id_categoria = cat.id_categoria");
    $result = $result->fetchAll();
    return ($result) ? $result : false;
}

function checkSession() {
    if (!isset($_SESSION['admin'])) {
        header('Location: ' . RUTA);
    }
}
?>
