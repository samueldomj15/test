<?php session_start();

require 'config.php';
require '../funciones.php';

checkSession();

$conn = connection($db_config);
if (!$conn) {
    header('Location: 404.php');
}

// obtiene las categorias
$categories = getCategorie($conn);
// if (!$products) {
//     header('Location: 404.php');
// }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name_product = clearData($_POST['nombre_producto']);
    $category = $_POST['id_categoria'];
    $brochure = $_POST['brochure'];
    $description = $_POST['descripcion'];
    $img1 = $_FILES['imgone']['tmp_name'];
    $img2 = $_FILES['imgtwo']['tmp_name'];
    $img3 = $_FILES['imgthree']['tmp_name'];

    $file_upload_one = '../' . $erillamhc_config['folder_images'] . $_FILES['imgone']['name'];
    $file_upload_two = '../' . $erillamhc_config['folder_images'] . $_FILES['imgtwo']['name'];
    $file_upload_three = '../' . $erillamhc_config['folder_images'] . $_FILES['imgthree']['name'];

    move_uploaded_file($img1, $file_upload_one);
    move_uploaded_file($img2, $file_upload_two);
    move_uploaded_file($img3, $file_upload_three);

    $statement = $conn->prepare(
        'INSERT INTO productos(id_producto, nombre_producto, descripcion, link_brochure, img1, img2, img3, id_categoria) VALUES (null, :nombre_producto, :descripcion, :link_brochure, :imgone, :imgtwo, :imgthree, :id_categoria)'
    );

    $statement->execute(array(
        ':nombre_producto' => $name_product,
        ':descripcion' => $description,
        ':link_brochure' => $brochure,
        ':imgone' => $_FILES['imgone']['name'],
        ':imgtwo' => $_FILES['imgtwo']['name'],
        ':imgthree' => $_FILES['imgthree']['name'],
        ':id_categoria' => $category
    ));

    header('Location: ' . RUTA . 'admin');

}



require '../views/agregar_producto.view.php';
?>
