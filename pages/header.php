<?php
      session_start();
      if (!isset($_SESSION['accesoAdmin'])) {

        echo '
            <!DOCTYPE html>
            <html lang="en">

            <head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <link rel="stylesheet" href="http://localhost:80/web-monolitica-php/styles/index.css">
              <title>Document</title>
            </head>

            <body>
              <div class="header flex">
                <a class="boton flex" href="http://localhost:80/web-monolitica-php/pages/usuarios/registroUsuario.php">Registrarse</a>;
              </div>
              <div class="oro"></div>
            </body>
            ';

    } else if ($_SESSION['accesoAdmin'] === 0) {

        echo '
            <!DOCTYPE html>
            <html lang="en">

            <head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <link rel="stylesheet" href="http://localhost:80/web-monolitica-php/styles/index.css">
              <title>Document</title>
            </head>

            <body>
              <div class="header flex">
                <a class="boton flex" href="http://localhost:80/web-monolitica-php/pages/user/cartaPlatos.php">Carta</a>
                <a class="boton flex"href="http://localhost:80/web-monolitica-php/pages/usuarios/perfilUsuario.php">Perfil</a>
                <a class="boton flex"href="http://localhost:80/web-monolitica-php/pages/usuarios/logout.php">Cerrar Sesión</a>
              </div>
              <div class="oro"></div>
            </body>
            ';

    } else {

      echo '
            <!DOCTYPE html>
            <html lang="en">

            <head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <link rel="stylesheet" href="http://localhost:80/web-monolitica-php/styles/index.css">
              <title>Document</title>
            </head>

            <body>
              <div class="header flex">
                <a class="boton flex" href="http://localhost:80/web-monolitica-php/pages/platos/cartaPlatos.php">Platos</a>
                <a class="boton flex" href="http://localhost:80/web-monolitica-php/pages/usuarios/mostrarUsuarios.php">Usuarios</a>
                <a class="boton flex"href="http://localhost:80/web-monolitica-php/pages/usuarios/perfilUsuario.php">Perfil</a>
                <a class="boton flex"href="http://localhost:80/web-monolitica-php/pages/usuarios/logout.php">Cerrar Sesión</a>
              </div>
              <div class="oro"></div>
            </body>
            ';

    }

?>