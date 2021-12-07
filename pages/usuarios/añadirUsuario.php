<?php
    include '../header.php';
    if ((!isset($_SESSION['accesoAdmin'])) || ($_SESSION['accesoAdmin'] === 0) ) {
        echo '
            <div class="main d-flex justify-content-center align-items-center">
                <p>No tiene permisos para acceder a esta area</p>
            </div>
        ';
        return;     
        }
        
        echo '
        
        <div class="main d-flex justify-content-center align-items-center">
            <form class="card" action="añadir.php" method="post">
                <h5 class="card-header bg-dark text-white-50">Añadir Usuario</h5>
                <div class="card-body d-flex flex-column p-4 bg-light">
                    <label for="nombre">Nombre</label>
                    <input class="m-3" type="text" name="nombre" placeholder="Nombre" pattern="^[A-Za-z0-9 ]{3,16}$" title="Min. 3 caracteres y solo admite letras, numeros y espacios" required/>
                    <label for="email">Email</label>
                    <input class="m-3" type="email" name="email" placeholder="Email" required/>
                    <label for="contrasena">Contraseña</label>
                    <input class="m-3" type="password" name="contrasena" placeholder="Contraseña" pattern="^.{4,20}$" title="Min. 4 caracteres" required/>
                    <label for="admin">Tipo de Usuario</label>
                    <select class="m-3" type="number" name="accesoAdmin">
                        <option value="0">Usuario</option>
                        <option value="1">Admin</option>
                    </select>
                    <input class="m-3 btn btn-danger" type="submit" value="Registrar"/>
                    <a class="btn red" href="./mostrarUsuarios.php">Volver</a>
                </div>
            </form>  
        </div>
    </body>
</html>
';
?>