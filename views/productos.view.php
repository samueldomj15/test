<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="descripcion de lo que es el sitio web">
    <meta name="keywords" content="palabras claves del sitio web">
    <title>Productos | Erillam Healthcare</title>
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
                <a href="<?php echo RUTA; ?>">
                    <img src="assets/logo-erillamhc.png" alt="Erillam Healthcare Logo" class="navbar__logo">
                </a>
            </div>
            <span class="navbar__toggle-menu">
                <i class="fa fa-bars"></i>
            </span>
            <ul class="navbar__menu">
                <li class="navbar__item"><a href="<?php echo RUTA; ?>" class="navbar__link">Volver al Inicio</a></li>
            </ul>
        </nav>
        <!-- Hero -->
        <div class="hero hero--small">
            <img src="assets/hero-products.jpg" alt="Nombre de la imagen" class="hero__img">
            <div class="hero__overlay"></div>
            <div class="hero__content">
                <h4 class="t2 txt-white mb-15">Productos ofrecidos por nosotros</h4>
                <p class="txt-base txt-white mb-20">
                    Puedes buscar los productos por su nombre o por categoría, presiona enter para realizar la busqueda
                </p>
                <!-- Barra de busqueda de productos -->
                <form name="search" action="<?php echo RUTA; ?>buscar.php" method="get">
                    <div class="control">
                        <!-- filtrar producto por nombre o categoría, enter para filtrar -->
                        <input type="text" name="search" class="input" placeholder="Buscar producto...">
                        <i class="fa fa-search icon"></i>
                    </div>
                </form>
            </div>
        </div>
    </header>

    <!-- Muestra todos los productos -->
    <section class="s-products" id="productos">
        <div class="container">
            <!-- Ciclo para recoger productos -->
            <div class="row justify-content-around mb-25">
                <?php foreach ($products as $product): ?>
                    <div class="column-12-of-12 column-6-of-12--tablet column-3-of-12--widescreen mb-20">
                        <article class="card" category="arcoenc">
                            <figure class="card__media">
                                <a href="producto.php?id=<?php echo $product['id_producto']; ?>">
                                    <img src="<?php echo RUTA; ?>images/<?php echo $product['img1']; ?>" alt="<?php echo $product['nombre_producto']; ?>" class="card__media-img">
                                </a>
                            </figure>
                            <div class="card__content">
                                <span class="txt-small txt-secondary"><?php echo $product['nombre_categoria']; ?></span>
                                <h3 class="txt-base">
                                    <strong><?php echo $product['nombre_producto']; ?></strong>
                                </h3>
                            </div>
                            <div class="card__actions">
                                <a href="producto.php?id=<?php echo $product['id_producto']; ?>" class="button button-primary button-outline button-small">Ver producto</a>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>

            <?php require 'paginacion.php'; ?>

        </div>
    </section>

    <?php require 'footer.php'; ?>
