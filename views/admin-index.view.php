<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel de administrador | Erillam Healthcare</title>
    <link rel="icon" type="image/png" size="16x16" href="<?php echo RUTA; ?>assets/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/normalize.css">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/styles.css">
</head>
<body>

    <!-- Navegación principal -->
    <header class="site-header">
        <nav class="navbar">
            <div class="navbar__brand">
                <img src="<?php echo RUTA; ?>assets/logo-erillamhc.png" alt="Erillam Healthcare Logo" class="navbar__logo">
            </div>
            <span class="navbar__toggle-menu">
                <i class="fa fa-bars"></i>
            </span>
            <ul class="navbar__menu">
                <li class="navbar__item"><a href="agregar_categoria.php" class="navbar__link">Agregar categoría</a></li>
                <li class="navbar__item"><a href="agregar_producto.php" class="navbar__link">Agregar producto</a></li>
                <li class="navbar__item">
                    <div class="navbar__item-content">
                        <a href="cerrar.php" class="button button-primary button-outline">Cerrar sesión</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Muestra los productos en el panel de administrador -->
    <section class="s-products" id="productos">
        <div class="container">
            <div class="row justify-content-center mb-35">
                <div class="column-12-of-12 column-10-of-12--tablet column-8-of-12--desktop column-7-of-12--fullhd">
                    <div class="intro content-center">
                        <h5 class="t2 mb-15"><span class="intro--border">Panel de administrador</span></h5>
                        <!-- Barra de busqueda -->
                        <form name="search" action="<?php echo RUTA; ?>admin/admin-buscar.php" method="get">
                            <div class="control">
                                <input type="text" name="search" class="input" placeholder="Buscar producto o categoría, para editar o eliminar">
                                <i class="fa fa-search icon"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Recoge productos -->
            <div class="row mb-25">
                <?php foreach ($products as $product): ?>
                    <div class="column-12-of-12 column-6-of-12--tablet column-3-of-12--widescreen mb-20">
                        <article class="card" category="arcoenc">
                            <figure class="card__media">
                                <a href="../producto.php?id=<?php echo $product['id_producto']; ?>">
                                    <img src="<?php echo RUTA; ?>images/<?php echo $product['img1']; ?>" alt="<?php echo $product['nombre_producto']; ?>" class="card__media-img">
                                </a>
                            </figure>
                            <div class="card__content">
                                <span class="txt-small txt-secondary"><?php echo $product['nombre_categoria']; ?></span>
                                <h3 class="txt-base">
                                    <strong><?php echo $product['nombre_producto']; ?></strong>
                                </h3>
                            </div>
                            <div class="card__actions content-center">
                                <a href="editar.php?id=<?php echo $product['id_producto']; ?>" class="button button-warning button-small">Editar</a>
                                <a href="eliminar.php?id=<?php echo $product['id_producto']; ?>" class="button button-danger button-small">Eliminar</a>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>

            <!--  -->
            <?php require '../admin/admin-paginacion.php'; ?>

        </div>
    </section>

<!-- Footer -->
<?php require '../views/footer.php'; ?>
