<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login administrador | Erillam Healthcare</title>
    <link rel="icon" type="image/png" size="16x16" href="<?php echo RUTA; ?>assets/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/normalize.css">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/styles.css">
</head>
<body>

    <main class="site-content">
        <!-- Sección de login administrador (s-login-admin) en el inicio-->
        <section class="s-login-admin">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="column-12-of-12 column-6-of-12--desktop">
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form-admin mt-70">
                            <a href="<?php echo RUTA; ?>">
                                <img src="<?php echo RUTA; ?>assets/logo-erillamhc.png" alt="Erillam Healthcare Logo" class="mg-x-auto mb-25" width="130">
                            </a>
                            <div class="field">
                                <label for="email" class="label">Correo electrónico</label>
                                <input type="email" class="input" name="email" id="email">
                            </div>
                            <div class="field mb-20">
                                <label for="password" class="label">Contraseña</label>
                                <input type="password" class="input" name="password" id="password">
                            </div>

                            <?php if (!empty($error)): ?>
                                <div class="alert danger mb-10" id="sent-error">
                                    <?php echo $error; ?>
                                </div>
                            <?php endif; ?>
                            <input type="submit" value="Iniciar sesión" class="button button-primary button-block">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="js/jquery.min.js"></script>
</body>
</html>
