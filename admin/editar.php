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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_product = clearData($_POST['id_producto']);
    $name_product = clearData($_POST['nombre_producto']);
    $category = $_POST['id_categoria'];
    $brochure = $_POST['brochure'];
    $description = $_POST['descripcion'];

    $img1_saved = $_POST['imgone-saved'];
    $img1 = $_FILES['imgone'];

    $img2_saved = $_POST['imgtwo-saved'];
    $img2 = $_FILES['imgtwo'];

    $img3_saved = $_POST['imgthree-saved'];
    $img3 = $_FILES['imgthree'];

    // comprobamos si la imagen esta vacia, si esta vacia se utiliza la imagen actual
    if (empty($img1['name'])) {
        $img1 = $img1_saved;
    } else {
        $file_upload_one = '../' . $erillamhc_config['folder_images'] . $_FILES['imgone']['name'];
        move_uploaded_file($_FILES['imgone']['tmp_name'], $file_upload_one);
        $img1 = $_FILES['imgone']['name'];
    }

    if (empty($img2['name'])) {
        $img2 = $img2_saved;
    } else {
        $file_upload_two = '../' . $erillamhc_config['folder_images'] . $_FILES['imgtwo']['name'];
        move_uploaded_file($_FILES['imgtwo']['tmp_name'], $file_upload_two);
        $img2 = $_FILES['imgtwo']['name'];
    }

    if (empty($img3['name'])) {
        $img3 = $img3_saved;
    } else {
        $file_upload_three = '../' . $erillamhc_config['folder_images'] . $_FILES['imgthree']['name'];
        move_uploaded_file($_FILES['imgthree']['tmp_name'], $file_upload_three);
        $img3 = $_FILES['imgthree']['name'];
    }

    $statement = $conn->prepare(
        'UPDATE productos SET
        nombre_producto = :nombre_producto,
        descripcion = :descripcion,
        link_brochure = :brochure,
        img1 = :imgone, img2 = :imgtwo, img3 = :imgthree,
        id_categoria = :id_categoria
        WHERE id_producto = :id_producto'
    );

    $statement->execute(array(
        ':id_producto' => $id_product,
        ':nombre_producto' => $name_product,
        ':descripcion' => $description,
        ':brochure' => $brochure,
        ':imgone' => $img1,
        ':imgtwo' => $img2,
        ':imgthree' => $img3,
        ':id_categoria' => $category
    ));

    header('Location: ' . RUTA . 'admin');

} else {
    $id_product = id_product($_GET['id']);

    if (empty($id_product)) {
        header('Location: ' . RUTA . 'admin');
    }

    $product = getProductPerId($conn, $id_product);

    if (!$product) {
        header('Location: ' . RUTA . 'admin');
    }

    $product = $product[0];
}

require '../views/editar.view.php';

?>
