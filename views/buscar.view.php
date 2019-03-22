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
                <li class="navbar__item"><a href="<?php echo RUTA; ?>productos.php" class="navbar__link">Todos los productos</a></li>
            </ul>
        </nav>
    </header>

    <!-- Resulatados de la busqueda -->
    <section class="s-products" id="productos">
        <div class="container">
            <div class="row justify-content-center mb-25">
                <div class="column-12-of-12 column-10-of-12--tablet column-8-of-12--desktop column-7-of-12--fullhd">
                    <div class="intro content-center">
                        <h4 class="t3"><span class="intro--border"><?php echo $title; ?></span></h4>
                    </div>
                </div>
            </div>

            <!-- Recoge los productos de la busqueda -->
            <div class="row justify-content-around mb-25">
                <?php foreach ($result as $product): ?>
                    <div class="column-12-of-12 column-6-of-12--tablet column-3-of-12--widescreen mb-20">
                        <article class="card" category="arcoenc">
                            <figure class="card__media">
                                <a href="producto.php?id=<?php echo $product['id_producto']; ?>">
                                    <img src="<?php echo RUTA; ?>images/<?php echo $product['img1']; ?>" alt="Nombre del producto" class="card__media-img">
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
        </div>
    </section>

    <?php require 'footer.php'; ?>
