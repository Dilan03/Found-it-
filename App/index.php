<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../css/keza.css">
    <link rel="stylesheet" href="../../css/jesus.css">
    <link rel="stylesheet" href="../../css/elias.css">
    <link rel="stylesheet" href="../../css/variables.css">
    <link rel="stylesheet" href="../../css/dilan.css">
    <link rel="stylesheet" href="../../css/normalize.css">
    <title>Document</title>
</head>
<body>
    <div class="container">        
        <header class="header">
            <i class="logo"><a href="index.html"><img src="../../assets/icons/logo.svg" alt="logo"></a></i>
            <div class="search__container">
                <form class="search__form">
                    <button class="button__search" type="submit"> <i> <img src="../../assets/icons/search.svg"> </i> </button>
                    <input type="text" placeholder="Buscar...">
                </form>
            </div>
            <div class="header__options">
                <div class="options__logeduser">
                    <i><img class="options__upload" src="../../assets/icons/upload.svg"></i>
                    <i><img class="options__tuerca" src="../../assets/icons/tuerca.svg"></i>
                    <i>
                        <img class="options__user hideElement" src="../../assets/icons/user-box.svg" >
                        
                        <div class="profilepic">
                            <img src="../../assets/images/perroperfil.png" alt="profilepic">
                        </div>
                    </i>
                </div>
                <div class="button__login hideElement">
                    <button type="submit" class="boton boton__tarjeta boton__tarjeta--login">Iniciar sesión</button>
                </div>
            </div>
        </header>

        <nav class="menu">
            <a href="index.html"><i class="icon icon__home"><img></i></a>
            <a href="lostobjects.html"><i class="icon icon__lost"><img></i></a>
            <a href="foundobjects.html"><i class="icon icon__found"><img></i></a>
        </nav>

        <section class="main hero">
            <h1 class="hero__titulo">¿Perdiste o encontraste algo? ¡Publicalo!</h1>
            <button class="boton boton__hero">Empezar a publicar</button>
            <img class="hero__imagen" src="../../assets/images/caja.png" alt="">
        </section>

        <section class="main RecienteGallery">
            <h2 class="RecienteGallery__titulo">Encontrado recientemente</h2>
            <div class="tarjetaSlider">
                <div class="tarjeta slider-wh ">
                    <div class="tarjeta__etiquetas">
                        <div class="etiquetaEST etiquetaEST--ancient"><span>#Ancient</span></div>
                        <div class="etiquetaEST etiquetaEST--found"><span>#Found</span></div>
                    </div>
                    <div class="tarjeta__image">
                        <img src="../../assets/images/test.jpg" alt="">
                    </div>
                    <div class="tarjeta__detalles">
                        <h4 class="tarjeta__nombre">Objeto 1</h4>
                        <span>
                            <p class="etiquetaCAT">electronicos</p>
                            <button class="boton boton__tarjeta"><a href="detailobject.html">Informacion</a></button>
                        </span>
                        <span class="tarjeta__fecha">Perdido: 22/02/2023</span>
                    </div>
                </div>
                <div class="tarjeta slider-wh ">
                    <div class="tarjeta__etiquetas">
                        <div class="etiquetaEST etiquetaEST--ancient"><span>#Ancient</span></div>
                        <div class="etiquetaEST etiquetaEST--found"><span>#Found</span></div>
                    </div>
                    <div class="tarjeta__image">
                        <img src="../../assets/images/test.jpg" alt="">
                    </div>
                    <div class="tarjeta__detalles">
                        <h4 class="tarjeta__nombre">Objeto 1</h4>
                        <span>
                            <p class="etiquetaCAT">electronicos</p>
                            <button class="boton boton__tarjeta"><a href="detailobject.html">Informacion</a></button>
                        </span>
                        <span class="tarjeta__fecha">Perdido: 22/02/2023</span>
                    </div>
                </div>
                <div class="tarjeta slider-wh ">
                    <div class="tarjeta__etiquetas">
                        <!-- <div class="etiquetaEST etiquetaEST--ancient"><span>#Ancient</span></div> -->
                        <div class="etiquetaEST etiquetaEST--found"><span>#Found</span></div>
                    </div>
                    <div class="tarjeta__image">
                        <img src="../../assets/images/test.jpg" alt="">
                    </div>
                    <div class="tarjeta__detalles">
                        <h4 class="tarjeta__nombre">Objeto 1</h4>
                        <span>
                            <p class="etiquetaCAT">electronicos</p>
                            <button class="boton boton__tarjeta">Informacion</button>
                        </span>
                        <span class="tarjeta__fecha">Perdido: 22/02/2023</span>
                    </div>
                </div>
                <div class="tarjeta slider-wh ">
                    <div class="tarjeta__etiquetas">
                        <!-- <div class="etiquetaEST etiquetaEST--ancient"><span>#Ancient</span></div> -->
                        <div class="etiquetaEST etiquetaEST--found"><span>#Found</span></div>
                    </div>
                    <div class="tarjeta__image">
                        <img src="../../assets/images/test.jpg" alt="">
                    </div>
                    <div class="tarjeta__detalles">
                        <h4 class="tarjeta__nombre">Objeto 1</h4>
                        <span>
                            <p class="etiquetaCAT">electronicos</p>
                            <button class="boton boton__tarjeta"><a href="detailobject.html">Informacion</a></button>
                        </span>
                        <span class="tarjeta__fecha">Perdido: 22/02/2023</span>
                    </div>
                </div>
            </div>

            <h2 class="RecienteGallery__titulo">Perdido recientemente</h2>
            <div class="tarjetaSlider">
                <div class="tarjeta slider-wh ">
                    <div class="tarjeta__etiquetas">
                        <div class="etiquetaEST etiquetaEST--ancient"><span>#Ancient</span></div>
                        <div class="etiquetaEST etiquetaEST--lost"><span>#Lost</span></div>
                    </div>
                    <div class="tarjeta__image">
                        <img src="../../assets/images/test.jpg" alt="">
                    </div>
                    <div class="tarjeta__detalles">
                        <h4 class="tarjeta__nombre">Objeto 1</h4>
                        <span>
                            <p class="etiquetaCAT">electronicos</p>
                            <button class="boton boton__tarjeta"><a href="detailobject.html">Informacion</a></button>
                        </span>
                        <span class="tarjeta__fecha">Perdido: 22/02/2023</span>
                    </div>
                </div>
                <div class="tarjeta slider-wh ">
                    <div class="tarjeta__etiquetas">
                        <div class="etiquetaEST etiquetaEST--ancient"><span>#Ancient</span></div>
                        <div class="etiquetaEST etiquetaEST--lost"><span>#Lost</span></div>
                    </div>
                    <div class="tarjeta__image">
                        <img src="../../assets/images/test.jpg" alt="">
                    </div>
                    <div class="tarjeta__detalles">
                        <h4 class="tarjeta__nombre">Objeto 1</h4>
                        <span>
                            <p class="etiquetaCAT">electronicos</p>
                            <button class="boton boton__tarjeta"><a href="detailobject.html">Informacion</a></button>
                        </span>
                        <span class="tarjeta__fecha">Perdido: 22/02/2023</span>
                    </div>
                </div>
                <div class="tarjeta slider-wh ">
                    <div class="tarjeta__etiquetas">
                        <!-- <div class="etiquetaEST etiquetaEST--ancient"><span>#Ancient</span></div> -->
                        <div class="etiquetaEST etiquetaEST--lost"><span>#Lost</span></div>
                    </div>
                    <div class="tarjeta__image">
                        <img src="../../assets/images/test.jpg" alt="">
                    </div>
                    <div class="tarjeta__detalles">
                        <h4 class="tarjeta__nombre">Objeto 1</h4>
                        <span>
                            <p class="etiquetaCAT">electronicos</p>
                            <button class="boton boton__tarjeta"><a href="detailobject.html">Informacion</a></button>
                        </span>
                        <span class="tarjeta__fecha">Perdido: 22/02/2023</span>
                    </div>
                </div>
                <div class="tarjeta slider-wh ">
                    <div class="tarjeta__etiquetas">
                        <!-- <div class="etiquetaEST etiquetaEST--ancient"><span>#Ancient</span></div> -->
                        <div class="etiquetaEST etiquetaEST--found"><span>#Found</span></div>
                    </div>
                    <div class="tarjeta__image">
                        <img src="../../assets/images/test.jpg" alt="">
                    </div>
                    <div class="tarjeta__detalles">
                        <h4 class="tarjeta__nombre">Objeto 1</h4>
                        <span>
                            <p class="etiquetaCAT">electronicos</p>
                            <button class="boton boton__tarjeta"><a href="detailobject.html">Informacion</a></button>
                        </span>
                        <span class="tarjeta__fecha">Perdido: 22/02/2023</span>
                    </div>
                </div>
            </div>

            <h2 class="RecienteGallery__titulo">Recuperado recientemente</h2>
            <div class="tarjetaSlider">
                <div class="tarjeta slider-wh ">
                    <div class="tarjeta__etiquetas">
                        <div class="etiquetaEST etiquetaEST--ancient"><span>#Ancient</span></div>
                        <div class="etiquetaEST etiquetaEST--gathered"><span>#Gathered</span></div>
                    </div>
                    <div class="tarjeta__image">
                        <img src="../../assets/images/test.jpg" alt="">
                    </div>
                    <div class="tarjeta__detalles">
                        <h4 class="tarjeta__nombre">Objeto 1</h4>
                        <span>
                            <p class="etiquetaCAT">electronicos</p>
                            <button class="boton boton__tarjeta"><a href="detailobject.html">Informacion</a></button>
                        </span>
                        <span class="tarjeta__fecha">Perdido: 22/02/2023</span>
                    </div>
                </div>
                <div class="tarjeta slider-wh ">
                    <div class="tarjeta__etiquetas">
                        <div class="etiquetaEST etiquetaEST--ancient"><span>#Ancient</span></div>
                        <div class="etiquetaEST etiquetaEST--gathered"><span>#Gathered</span></div>
                    </div>
                    <div class="tarjeta__image">
                        <img src="../../assets/images/test.jpg" alt="">
                    </div>
                    <div class="tarjeta__detalles">
                        <h4 class="tarjeta__nombre">Objeto 1</h4>
                        <span>
                            <p class="etiquetaCAT">electronicos</p>
                            <button class="boton boton__tarjeta"><a href="detailobject.html">Informacion</a></button>
                        </span>
                        <span class="tarjeta__fecha">Perdido: 22/02/2023</span>
                    </div>
                </div>
                <div class="tarjeta slider-wh ">
                    <div class="tarjeta__etiquetas">
                        <!-- <div class="etiquetaEST etiquetaEST--ancient"><span>#Ancient</span></div> -->
                        <div class="etiquetaEST etiquetaEST--gathered"><span>#Gathered</span></div>
                    </div>
                    <div class="tarjeta__image">
                        <img src="../../assets/images/test.jpg" alt="">
                    </div>
                    <div class="tarjeta__detalles">
                        <h4 class="tarjeta__nombre">Objeto 1</h4>
                        <span>
                            <p class="etiquetaCAT">electronicos</p>
                            <button class="boton boton__tarjeta"><a href="detailobject.html">Informacion</a></button>
                        </span>
                        <span class="tarjeta__fecha">Perdido: 22/02/2023</span>
                    </div>
                </div>
                <div class="tarjeta slider-wh ">
                    <div class="tarjeta__etiquetas">
                        <!-- <div class="etiquetaEST etiquetaEST--ancient"><span>#Ancient</span></div> -->
                        <div class="etiquetaEST etiquetaEST--gathered"><span>#Gathered</span></div>
                    </div>
                    <div class="tarjeta__image">
                        <img src="../../assets/images/test.jpg" alt="">
                    </div>
                    <div class="tarjeta__detalles">
                        <h4 class="tarjeta__nombre">Objeto 1</h4>
                        <span>
                            <p class="etiquetaCAT">electronicos</p>
                            <button class="boton boton__tarjeta"><a href="detailobject.html">Informacion</a></button>
                        </span>
                        <span class="tarjeta__fecha">Perdido: 22/02/2023</span>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="modal hideElement">
        <form class="login-form">
            <h2 class="login-titulo">HOLA OTRA VEZ!</h2>
            <div class="field-container">
              <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Correo" required>
              </div>
            
              <div class="form-group password-group">
                <div class="password-wrapper">
                  <input type="password" id="password" name="password" placeholder="Contraseña" required>
                  <span class="password-toggle"></span>
                </div>
                <p id="h1">¿Olvidaste tu contraseña?</p>
              </div>
            </div>
            
            <button type="submit" class="login-button">Entrar</button>
            <p id="h2">Crear una cuenta.</p>
        </form>
    </div>

    <div class="modal hideElement">
        <form class="registration-form">
            <h2 class="register-titulo">Registrate</h2>
          
            <div class="form-group">
              <input type="text" id="first-name" name="first-name" placeholder="Nombres" required>
            </div>
          
            <div class="form-group">
              <input type="text" id="last-name" name="last-name" placeholder="Apellidos" required>
            </div>
          
            <div class="form-group">
              <input type="email" id="email" name="email" placeholder="Correo" required>
            </div>
          
            <div class="form-group password-group">
              <div class="password-wrapper">
                <input type="password" id="password" name="password" placeholder="Contraseña" required>
                <span class="password-toggle"></span>
              </div>
            </div>
          
            <div class="form-group password-group">
              <div class="password-wrapper">
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirmar contraseña" required>
                <span class="password-toggle"></span>
              </div>
            </div>
          
            <div class="form-group">
              <select id="major" name="major" type ="major">
                    <option style="font-family:'Arial'" value="ISC">ISC</option>
                    <option style="font-family:'Arial'" value="INF">INF</option>
                    <option style="font-family:'Arial'" value="ARQ">Arquitectura</option>
                    <option style="font-family:'Arial'" value="IND">Industrial</option>
                    <option style="font-family:'Arial'" value="IDIND">Diseño Industrial</option>
                    <option style="font-family:'Arial'" value="IGE">Gestión Empresarial</option>
                    <option style="font-family:'Arial'" value="ADMIN">Administración</option>
              </select>
            </div>
          
            <div class="form-group">
              <input type="text" id="phone" name="phone" placeholder="Número de teléfono" pattern="[0-9]+" title="Ingrese un número de teléfono válido" required >
            </div>
          
            <button type="submit" class="submit-button">Registrarse</button>
        </form>
    </div>

    <footer class="footer">
        <div class="footer__contenido">
            <i class="logo__footer"><a href="index.html"><img src="../../assets/icons/logofooter.svg" alt="logo"></a></i>
            <span>
                <a href="#">LINK-1</a>
                <a href="#">LINK-2</a>
            </span>
            <span></span>
        </div>
    </footer>
</body>
</html>