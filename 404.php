<?php
require 'admin/config.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error | Erillam Healthcare</title>
    <link rel="icon" type="image/png" size="16x16" href="assets/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="site-header">
        <!-- Hero image small -->
        <div class="hero hero--full">
            <img src="assets/404.jpg" alt="Nombre de la imagen" class="hero__img">
            <div class="hero__overlay"></div>
            <div class="hero__content">
                <h4 class="t2 txt-white mb-15">Error 404...</h4>
                <p class="txt-base txt-white mb-20">
                    En estos momentos estamos dando mantenimiento al sitio web.
                    Gracias por su comprensión :)
                </p>
                <a href="<?php echo RUTA; ?>" class="button button-white button-outline">Volver a cargar</a>
            </div>
        </div>
    </header>
