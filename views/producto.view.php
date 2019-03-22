<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $product['nombre_producto']; ?> | Erillam Healthcare</title>
    <link rel="icon" type="image/png" size="16x16" href="<?php echo RUTA; ?>assets/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/normalize.css">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/styles.css">

    <!-- Plugins -->
    <link rel="stylesheet" href="plugins/swipebox/src/css/swipebox.min.css">

</head>
<body>

    <!-- Navegación principal -->
    <header class="site-header">
        <nav class="navbar">
            <div class="navbar__brand">
                <a href="<?php echo RUTA; ?>">
                    <img src="<?php echo RUTA; ?>assets/logo-erillamhc.png" alt="Erillam Healthcare Logo" class="navbar__logo">
                </a>
            </div>
            <span class="navbar__toggle-menu">
                <i class="fa fa-bars"></i>
            </span>
            <ul class="navbar__menu">
                <li class="navbar__item"><a href="<?php echo RUTA; ?>" class="navbar__link">Volver al inicio</a></li>
                <li class="navbar__item"><a href="<?php echo RUTA; ?>productos.php" class="navbar__link">Todos los productos</a></li>
            </ul>
        </nav>
    </header>

    <!-- El producto carga en su propia pagina -->
    <section class="s-single-product">
        <div class="container">
            <!-- Recoge todos los datos del producto de la bd -->
            <div class="row">
                <div class="column-12-of-12 column-6-of-12--desktop mb-20">
                    <div class="s-single-product__content">
                        <div class="intro content-center mb-15">
                            <span class="txt-base txt-secondary"><?php echo $product['nombre_categoria']; ?></span>
                            <h4 class="t3"><span class="intro--border"><?php echo $product['nombre_producto']; ?></span></h4>
                        </div>
                        <div class="s-single-product__info txt-justify mb-15">
                            <p class="txt-small mb-10">
                                <?php echo nl2br($product['descripcion']); ?>
                            </p>
                        </div>
                        <div class="s-single-product__actions content-center">
                            <p class="txt-base bold">Solicitar cotización</span>
                            <div class="flex justify-content-around mt-15">
                                <a href="mailto:contacto@erillam.com" class="button button-primary button-block button-outline mb-10">
                                    contacto@erillam.com <i class="fa fa-envelope"></i>
                                </a>
                                <a href="tel:7771234567" class="button button-secondary button-block button-outline">
                                    (777) 123 4567 <i class="fa fa-phone"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-12-of-12 column-6-of-12--desktop">
                    <div class="s-single-product__grid">
                        <a href="<?php echo RUTA; ?>images/<?php echo $product['img1']; ?>"
                           class="swipebox"
                           title="<?php echo $product['nombre_producto']; ?>">

                            <img src="<?php echo RUTA; ?>images/<?php echo $product['img1']; ?>"
                                 alt="<?php echo $product['nombre_producto']; ?>"
                                 class="s-single-product__grid-item">
                        </a>
                        <a href="<?php echo RUTA; ?>images/<?php echo $product['img2']; ?>"
                           class="swipebox"
                           title="<?php echo $product['nombre_producto']; ?>">

                            <img src="<?php echo RUTA; ?>images/<?php echo $product['img2']; ?>"
                                 alt="<?php echo $product['nombre_producto']; ?>"
                                 class="s-single-product__grid-item">
                        </a>
                        <a href="<?php echo RUTA; ?>images/<?php echo $product['img3']; ?>"
                           class="swipebox"
                           title="<?php echo $product['nombre_producto']; ?>">

                            <img src="<?php echo RUTA; ?>images/<?php echo $product['img3']; ?>"
                                 alt="<?php echo $product['nombre_producto']; ?>"
                                 class="s-single-product__grid-item">
                        </a>
                        <span class="txt-small txt-gray help">Haga clic en la imagen para expandir</span>
                        <a href="<?php echo $product['link_brochure']; ?>" class="button button-secondary button-small">Ver brochure <i class="fa fa-file-pdf-o"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require 'footer.php'; ?>
