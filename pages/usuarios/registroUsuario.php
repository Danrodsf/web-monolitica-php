<?php
include '../header.php';
?>

        <div class="main d-flex justify-content-center align-items-center">
            <form class="card" action="registro.php" method="post">
                <h4 class="card-header bg-dark text-white-50">Registrarse</h4>
                <div class="card-body d-flex flex-column p-4 bg-light">
                    <input class="m-3" type="text" name="nombre" placeholder="Nombre" pattern="^[A-Za-z0-9]{3,16}$" title="Min. 3 caracteres y solo admite letras y numeros" required/>
                    <input class="m-3" type="email" name="email" placeholder="Email" required/>
                    <input class="m-3" type="password" name="contrasena" placeholder="Contraseña" pattern="^.{4,20}$" title="Min. 4 caracteres" required/>
                    <input class="m-3 btn btn-danger" type="submit" value="Registrar" class="boton"/>
                    <a class="btn red" href="../../index.php">Volver</a>
                </div>
            </form>  
        </div>
    </body>
</html>