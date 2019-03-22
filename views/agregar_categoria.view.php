<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo producto | Erillam Healthcare</title>
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
                <li class="navbar__item"><a href="<?php echo RUTA; ?>admin" class="navbar__link">Regresar</a></li>
            </ul>
        </nav>
    </header>

    <!-- Formulario para agregar nuevo producto -->
    <section class="s-add-product mg-y-70">
        <div class="container">
            <div class="row justify-content-center mb-25">
                <div class="column-12-of-12 column-10-of-12--tablet column-8-of-12--desktop column-7-of-12--fullhd">
                    <div class="intro content-center">
                        <h4 class="t2"><span class="intro--border">Nueva categoría</span></h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="column-12-of-12 column-10-of-12--desktop mg-x-auto">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="form-admin">
                        <div class="field mb-20">
                            <label for="category" class="label">Nombre de la categoría</label>
                            <input type="text" name="nombre_categoria" id="category" class="input">
                        </div>
                        <div class="field">
                            <input type="submit" name="" value="Agregar categoría" class="button button-primary button-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php require 'footer.php'; ?>
