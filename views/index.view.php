<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="descripcion de lo que es el sitio web">
    <meta name="keywords" content="palabras claves del sitio web">
    <title>Erillam Healthcare</title>
    <link rel="icon" type="image/png" size="16x16" href="<?php echo RUTA; ?>assets/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/normalize.css">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/styles.css">

    <!-- Plugins -->
    <link rel="stylesheet" href="plugins/swipebox/src/css/swipebox.min.css">
    <link rel="stylesheet" href="plugins/owlcarousel/owl.carousel.min.css">

    <!-- Scroll -->
    <script src="plugins/smoothScroll/smooth-scroll.min.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>

</head>
<body>

    <header class="site-header">
        <!-- Barra de navegación -->
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
                <li class="navbar__item"><a href="<?php echo RUTA; ?>" class="navbar__link">Inicio</a></li>
                <li class="navbar__item"><a href="#productos" class="navbar__link">Productos</a></li>
                <li class="navbar__item"><a href="#nosotros" class="navbar__link">Nosotros</a></li>
                <li class="navbar__item"><a href="#rispacs" class="navbar__link">RIS/PAC's</a></li>
                <li class="navbar__item"><a href="#nuestrasMarcas" class="navbar__link">Nuestras marcas</a></li>
                <li class="navbar__item"><a href="#contacto" class="navbar__link">Contacto</a></li>
            </ul>
        </nav>

        <!-- Hero image full -->
        <div class="hero hero--full">
            <img src="assets/hero-full.jpg" alt="Nombre de la imagen" class="hero__img">
            <div class="hero__overlay"></div>
            <div class="hero__content">
                <h1 class="t1 txt-white mb-15">Erillam Healthcare</h1>
                <p class="txt-base txt-white mb-20">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos ea inventore aspernatur adipisci rem repellat. Aut architecto ducimus unde hic minus alias deleniti in voluptatem? Maiores error qui earum impedit!
                </p>
                <a href="productos.php" class="button button-white button-outline">Ir a todos los productos</a>
            </div>
        </div>
    </header>

    <main class="site-content">
        <!-- Sección de productos (s-products) en el inicio-->
        <section class="s-products" id="productos">
            <div class="container">
                <!-- row(fila) s-products -->
                <div class="row justify-content-center mb-25">
                    <div class="column-12-of-12 column-10-of-12--tablet column-8-of-12--desktop column-7-of-12--fullhd">
                        <div class="intro content-center">
                            <h4 class="t2 mb-10"><span class="intro--border">Productos</span></h4>
                            <p class="txt-base">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique laborum illum laudantium? Non, nulla voluptates?
                            </p>
                        </div>
                    </div>
                </div>

                <!-- row(fila) s-products -->
                <div class="row">
                    <?php foreach ($products as $product): ?>
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

                <div class="content-center">
                    <a href="productos.php" class="button button-primary">Ver todos los productos</a>
                </div>
            </div>
        </section>

        <!-- Sección de nuestra empresa (s-about)-->
        <section class="s-about" id="nosotros">
            <div class="container">
                <!-- row(fila) s-about -->
                <div class="row justify-content-center mb-25">
                    <div class="column-12-of-12 column-10-of-12--tablet column-8-of-12--desktop column-7-of-12--fullhd">
                        <div class="intro content-center">
                            <h4 class="t2 mb-10"><span class="intro--border">Nosotros</span></h4>
                        </div>
                    </div>
                </div>

                <!-- row(fila) s-about -->
                <div class="row">
                    <div class="column-12-of-12 column-6-of-12--desktop mb-20">
                        <div class="s-about__grid">
                            <a href="assets/nuestraEmpresa1.jpg" class="swipebox" title="Titulo de la imagen 1">
                                <img src="assets/nuestraEmpresa1.jpg" alt="Nombre de la imagen" class="s-about__grid-item">
                            </a>
                            <a href="assets/nuestraEmpresa2.jpg" class="swipebox" title="Titulo de la imagen 2">
                                <img src="assets/nuestraEmpresa2.jpg" alt="Nombre de la imagen" class="s-about__grid-item">
                            </a>
                            <a href="assets/nuestraEmpresa3.jpg" class="swipebox" title="Titulo de la imagen 3">
                                <img src="assets/nuestraEmpresa3.jpg" alt="Nombre de la imagen" class="s-about__grid-item">
                            </a>
                            <a href="assets/nuestraEmpresa3.jpg" class="swipebox" title="Titulo de la imagen 4">
                                <img src="assets/nuestraEmpresa3.jpg" alt="Nombre de la imagen" class="s-about__grid-item">
                            </a>
                        </div>
                    </div>
                    <div class="column-12-of-12 column-6-of-12--desktop mb-20">
                        <section class="accordion">
                            <article class="accordion__item">
                                <div class="accordion__header">
                                    Conócenos
                                    <span class="icon"><i class="fa fa-chevron-down"></i></span>
                                </div>
                                <div class="accordion__body">
                                    <p class="mb-15">
                                        Erillam healthcare es parte del CORPORATIVO Erillam empresas Morelenses creadas en base a las necesidades del mercado actual y con vista hacia el futuro con la nueva tecnología médica y hospitalaria.
                                    </p>
                                    <p>
                                        Hoy en día nos respalda una amplia experiencia en el ramo hospitalario a través de la integración de los mismos con proyectos llave en mano, donde no solo suministramos equipos e insumos, si no que le ayudamos a Construir Ideas.
                                    </p>
                                </div>
                            </article>
                            <article class="accordion__item">
                                <div class="accordion__header">
                                    Misión
                                    <span class="icon"><i class="fa fa-chevron-down"></i></span>
                                </div>
                                <div class="accordion__body">
                                    <p>
                                        Somos una empresa mexicana competitiva en comercialización de software para la administración de imágenes medicas y equipos médicos de la más alta calidad ofreciendo el servicio llave en mano para el desarrollo de nuevos proyectos en el ramo hospitalario, satisfaciendo necesidades y cumpliendo expectativas de nuestros clientes a través de personal capacitado, tecnología de punta y servicio personalizado logrando ser diferenciados dentro del mercado.
                                    </p>
                                </div>
                            </article>
                            <article class="accordion__item">
                                <div class="accordion__header">
                                    Visión
                                    <span class="icon"><i class="fa fa-chevron-down"></i></span>
                                </div>
                                <div class="accordion__body">
                                    <p>
                                        Ser el distribuidor líder en la rama hospitalaria mediante buenas prácticas y distribución de equipo médico en la mayor parte de la República Mexicana, ofreciendo un servicio especializado llave en mano logrando un crecimiento financiero constante.
                                    </p>
                                </div>
                            </article>
                            <article class="accordion__item">
                                <div class="accordion__header">
                                    Objetivos
                                    <span class="icon"><i class="fa fa-chevron-down"></i></span>
                                </div>
                                <div class="accordion__body">
                                    <p>
                                        Dar una  solución integral  hacia la excelencia, a través de la integración de soluciones tecnológicas ofertando una mejor relación costo/beneficio, procurando incrementar su competitividad, innovación y mejora continua, distinguiéndonos por ofrecer un servicio de calidad, sustentabilidad en su negocio y una contribución positiva a la sociedad.
                                    </p>
                                </div>
                            </article>
                            <article class="accordion__item">
                                <div class="accordion__header">
                                    Valores
                                    <span class="icon"><i class="fa fa-chevron-down"></i></span>
                                </div>
                                <div class="accordion__body">
                                    <ul style="list-style-position: inside; list-style-image: url(assets/favicon.png)">
                                        <li>Colaboración</li>
                                        <li>Calidad</li>
                                        <li>Actitud de servicio</li>
                                        <li>Innovación</li>
                                        <li>Discreción</li>
                                        <li>Puntualidad</li>
                                        <li>Honestidad</li>
                                        <li>Compromiso</li>
                                    </ul>
                                </div>
                            </article>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <!-- Hero image small -->
        <div class="hero hero--small">
            <img src="assets/hero-small.jpg" alt="Nombre de la imagen" class="hero__img">
            <div class="hero__overlay"></div>
            <div class="hero__content">
                <h4 class="t2 txt-white mb-15">Lorem ipsum dolor sit</h4>
                <p class="txt-base txt-white mb-20">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla quisquam suscipit consequuntur doloremque! Adipisci a aspernatur minus similique officia architecto.
                </p>
                <a href="#" class="button button-white button-outline">Mandar mensaje</a>
            </div>
        </div>

        <!-- Sección de RIS/PAC's (s-ris) -->
        <section class="s-ris" id="rispacs">
            <div class="container">
                <!-- row(fila) s-ris -->
                <div class="row justify-content-center mb-25">
                    <div class="column-12-of-12 column-10-of-12--tablet column-8-of-12--desktop column-7-of-12--fullhd">
                        <div class="intro content-center">
                            <h4 class="t2"><span class="intro--border">RIS/PAC's</span></h4>
                        </div>
                    </div>
                </div>

                <!-- row(fila) s-ris -->
                <div class="row">
                    <div class="column-12-of-12">
                        <article class="card card--raised">
                            <div class="card__media">
                                <iframe class="card__media-video" src="https://www.youtube.com/embed/CrSAC-XIF6I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="card__content">
                                <h3 class="txt-base mb-15">
                                    <strong>RIS/PAC's Sistema de Información Radiológica</strong>
                                    <i class="fa fa-check-circle-o"></i>
                                </h3>
                                <p class="txt-small txt-justify">
                                    Después de 10 años de investigación e identificar las necesidades de los médicos radiologos; se desarrollo el sistema SITD-RIS <strong> Ecosistema RIS/PAC's Sistema de Administración de Imágenes Medicas</strong> cubriendo las necesidades de los médicos radiologos, las necesidades de las áreas de imagen de los hospitales, clínicas y gabinetes y cubriendo necesidades administrativas.
                                </p>
                            </div>
                            <div class="card__actions">
                                <a href="http://erillamhc.com/uploads/6/9/4/1/69417131/ecosistema_sitdris_v18_br.pdf" target="_blank" class="button button-primary">
                                    Descargar brochure <i class="fa fa-file-pdf-o"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Testimonios (s-testimonials) -->
        <section class="s-testimonials">
            <div class="container">
                <!-- row(fila) s-testimonials -->
                <div class="row justify-content-center mb-25">
                    <div class="column-12-of-12 column-10-of-12--tablet column-8-of-12--desktop column-7-of-12--fullhd">
                        <div class="intro content-center">
                            <h4 class="t2 mb-10"><span class="intro--border">Testimonios</span></h4>
                            <p class="txt-base">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur quasi quae odio deleniti beatae quas!
                            </p>
                        </div>
                    </div>
                </div>

                <!-- testimonials carousel (owlcarousel) -->
                <div class="testimonials__carousel owl-carousel">
                    <div class="testimonials__box">
                        <div class="testimonials__message">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi voluptas harum esse debitis atque, nemo voluptatibus quibusdam unde ullam voluptate.
                        </div>
                        <div class="testimonials__brand">
                            <a href="#">
                                <img src="assets/testimonial1.png" alt="Nombre de la imagen" class="testimonials__logo">
                            </a>
                        </div>
                    </div>

                    <div class="testimonials__box">
                        <div class="testimonials__message">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat explicabo ab vitae ad eius soluta ratione aperiam possimus distinctio nam, cumque cum delectus sapiente mollitia enim reiciendis animi ex quia.
                        </div>
                        <div class="testimonials__brand">
                            <a href="#">
                                <img src="assets/testimonial2.png" alt="Nombre de la imagen" class="testimonials__logo">
                            </a>
                        </div>
                    </div>

                    <div class="testimonials__box">
                        <div class="testimonials__message">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis veniam odio facilis, repellat, voluptatum repellendus!
                        </div>
                        <div class="testimonials__brand">
                            <a href="#" class="txt-small txt-secondary medium">
                                Rigoberto Perez Salazar
                            </a>
                        </div>
                    </div>

                    <div class="testimonials__box">
                        <div class="testimonials__message">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit quibusdam, blanditiis qui saepe doloribus odit dolores enim vero. Quas obcaecati ratione veritatis at esse excepturi nemo dolor impedit quam reiciendis.
                        </div>
                        <div class="testimonials__brand">
                            <a href="#">
                                <img src="assets/marca3.gif" alt="Nombre de la imagen" class="testimonials__logo testimonials__logo--small">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Nuestras Marcas (s-our-brands) -->
        <section class="s-our-brands" id="nuestrasMarcas">
            <div class="container">
                <!-- row(fila) s-our-brands -->
                <div class="row justify-content-center mb-25">
                    <div class="column-12-of-12 column-10-of-12--tablet column-8-of-12--desktop column-7-of-12--fullhd">
                        <div class="intro content-center">
                            <h4 class="t2 mb-10"><span class="intro--border">Nuestras marcas</span></h4>
                            <p class="txt-base">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur quasi quae odio deleniti beatae quas!
                            </p>
                        </div>
                    </div>
                </div>

                <!-- row(fila) s-our-brands -->
                <div class="row align-items-center justify-content-center">
                    <div class="column-6-of-12 column-2-of-12--desktop mb-20">
                        <a href="#">
                            <img src="assets/marca1.png" alt="Nombre de la imagen" title="Logo x" class="s-our-brands__logo">
                        </a>
                    </div>
                    <div class="column-6-of-12 column-2-of-12--desktop mb-20">
                        <a href="#">
                            <img src="assets/marca2.png" alt="Nombre de la imagen" title="Logo x" class="s-our-brands__logo">
                        </a>
                    </div>
                    <div class="column-6-of-12 column-2-of-12--desktop mb-20">
                        <a href="#">
                            <img src="assets/marca3.gif" alt="Nombre de la imagen" title="Logo x" class="s-our-brands__logo s-our-brands__logo--small">
                        </a>
                    </div>
                    <div class="column-6-of-12 column-2-of-12--desktop mb-20">
                        <a href="#">
                            <img src="assets/marca4.png" alt="Nombre de la imagen" title="Logo x" class="s-our-brands__logo" style="width:150px">
                        </a>
                    </div>
                    <div class="column-6-of-12 column-2-of-12--desktop mb-20">
                        <a href="#">
                            <img src="assets/marca5.gif" alt="Nombre de la imagen" title="Logo x" class="s-our-brands__logo">
                        </a>
                    </div>
                    <div class="column-6-of-12 column-2-of-12--desktop mb-20">
                        <a href="#">
                            <img src="assets/marca6.png" alt="Nombre de la imagen" title="Logo x" class="s-our-brands__logo s-our-brands__logo">
                        </a>
                    </div>
                </div>

                <div class="s-our-brands__carousel owl-carousel">
                    <div class="s-our-brands__video">
                        <iframe src="https://www.youtube.com/embed/f1tMz-BzXAg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="s-our-brands__video">
                        <iframe src="https://www.youtube.com/embed/QvR_oeQ4MhY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="s-our-brands__video">
                        <iframe src="https://www.youtube.com/embed/FPC7DYeBDRA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="s-our-brands__video">
                        <iframe src="https://www.youtube.com/embed/TiviNOORr2k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                    <div class="s-our-brands__video">
                        <iframe src="https://www.youtube.com/embed/FM4RwVcvoJ0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                    <div class="s-our-brands__video">
                        <iframe src="https://www.youtube.com/embed/s6Le1rRJ8ws" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                    <div class="s-our-brands__video">
                        <iframe src="https://www.youtube.com/embed/SiPMLZqHrBE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                    <div class="s-our-brands__video">
                        <iframe src="https://www.youtube.com/embed/V5PaWy8PpXQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                </div>
            </div>
        </section>

        <!-- Sección de Contacto (s-contact) -->
        <section class="s-contact" id="contacto">
            <div class="container">
                <!-- row(fila) s-contact -->
                <div class="row justify-content-center mb-25">
                    <div class="column-12-of-12 column-10-of-12--tablet column-8-of-12--desktop column-7-of-12--fullhd">
                        <div class="intro content-center">
                            <h4 class="t2 mb-10"><span class="intro--border">Contáctanos</span></h4>
                            <p class="txt-base">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur quasi quae odio deleniti beatae quas!
                            </p>
                        </div>
                    </div>
                </div>

                <!-- row(fila) s-contact -->
                <div class="row">
                    <div class="column-12-of-12 column-6-of-12--desktop mb-20">
                        <form id="form-contact" class="form-contact">
                            <div class="field">
                                <label for="name" class="label">Nombre</label>
                                <input type="text" name="nombre" class="input" id="name" placeholder="Tu nombre">
                            </div>
                            <div class="field">
                                <label for="lastname" class="label">Apellidos</label>
                                <input type="text" name="apellidos" class="input" id="lastname" placeholder="Tu apellido">
                            </div>
                            <div class="field">
                                <label for="email" class="label">Correo electrónico</label>
                                <input type="email" name="email" class="input" id="email" placeholder="Tu correo electrónico">
                            </div>
                            <div class="field">
                                <label for="subject" class="label">Asunto</label>
                                <input type="text" name="asunto" class="input" id="subject">
                            </div>
                            <div class="field">
                                <label for="message" class="label">Mensaje</label>
                                <textarea name="mensaje" id="message" class="input textarea"></textarea>
                            </div>
                            <div class="mb-10">
                                <p class="alert success dnone" id="sent-success">Gracias por enviar tu mensaje</p>
                                <p class="alert danger dnone" id="sent-error"><?php echo $error; ?></p>
                            </div>
                            <button type="submit" class="button button-primary button-block">Enviar mensaje</button>
                        </form>
                    </div>
                    <div class="column-12-of-12 column-6-of-12--desktop">
                        <div class="s-contact__map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.5598832069827!2d-99.22198258527307!3d18.90659638718531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdd897aaaaaaab%3A0x2af9d6cde906c38d!2sERILLAM%2C+S.A+DE+C.V.!5e0!3m2!1ses-419!2smx!4v1552886936104" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php require 'footer.php'; ?>
