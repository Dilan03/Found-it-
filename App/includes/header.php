<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <?php include_once 'includes/scripts-js.php'?>
    <title>Document</title>
</head>
<body>
    <div class="container">        
        <header class="header">
            <i class="logo"><a href="index.php"><img src="assets/icons/logo.svg" alt="logo"></a></i>
            <div class="search__container">
                <form class="search__form">
                    <button class="button__search" type="submit"> <i> <img src="assets/icons/search.svg"> </i> </button>
                    <input type="text" placeholder="Buscar...">
                </form>
            </div>
            <div class="header__options">
                <?php if(!empty($_SESSION["id"])) { ?>
                    <div class="options__logeduser">
                        <i id="crear_post_btn"><img class="options__upload" src="assets/icons/upload.svg"></i>
                        <i id="options_btn"><img class="options__tuerca" src="assets/icons/tuerca.svg"></i>
                        <div class="options__desplegable hideElement" id="options_desplegable">
                            <a href="userposts.php">Mis publicaciones</a>
                            <a href="#" id="editar_registro_btn">Editar información</a>
                            <a href="#" id="cerrar_sesion_btn" >Cerrar sesión</a>
                        </div>
                        <i>
                            <img class="options__user hideElement" src="assets/icons/user-box.svg" >
                            
                            <div class="profilepic">
                                <?php
                                    echo '<img src=data:image;base64,'.$row['foto'].' alt="profilepic"/>'
                                ?>
                                <!-- <img src="assets/images/perroperfil.png" alt="profilepic"> -->
                            </div>
                        </i>
                    </div>
                <?php } else { ?>
                    <div class="button__login">
                        <button type="submit" class="boton boton__tarjeta boton__tarjeta--login" id="login_btn2">Iniciar sesión</button>
                    </div>
                <?php }?>
            </div>
        </header>