<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">

                <!-- LOGIN -->
                <form class="sign-in-form" action="" method="post">
                    <h2 class="title">LOGIN</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="" placeholder="usuario">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="" placeholder="contraseña">
                    </div>
                    <input type="submit" value="Entrar" class="btn solid">

                    <p class="social-text">Or sign in with social networks</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>

                <!-- REGISTRO -->
                <form class="sign-up-form" action="" method="post">
                    <h2 class="title">Registrate</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="" placeholder="usuario">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="" placeholder="correo">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="" placeholder="contraseña">
                    </div>
                    <input type="submit" value="Registrarse" class="btn solid">

                    <p class="social-text">Or sign up with social networks</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Eres Nuevo Aqui?</h3>
                    <p>Registrate con nosotros y obtiene los beneficios y privilegios de un socio</p>
                    <button class="btn transparent" id="sign-up-btn">Registro</button>
                </div>
                <img src="img/undraw_logistics_x4dc.svg" class="image" alt="">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Ya eres parte de nosotros?</h3>
                    <p>Si ya posees una cuenta con nosotros ingresa aqui</p>
                    <button class="btn transparent" id="sign-in-btn">Entrar</button>
                </div>
                <img src="img/undraw_Lighthouse_frb8.svg" class="image" alt="">
            </div>
        </div>
    </div>
    
    <script src="app.js"></script>
</body>
</html>