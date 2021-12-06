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
            <form class="card" action="añadirPlato.php" method="post">
                <h5 class="card-header bg-dark text-white-50">Añadir Plato</h5>
                <div class="card-body d-flex flex-column p-4 bg-light">
                    <label for="titulo">Nombre</label>
                    <input class="m-3" type="text" name="titulo" pattern="^[A-Za-z0-9 ]{3,16}$" title="Min. 3 caracteres y solo admite letras, numeros y espacios" required/>
                    <label for="comensales">Comensales</label>
                    <input class="m-3" type="number" name="comensales" min="1" max="9" required/>
                    <label for="tipo">Tipo</label>
                    <select class="m-3" name="tipo">
                        <option value="Principal">Principal</option>
                        <option value="Secundario">Secundario</option>
                        <option value="Postre">Postre</option>
                    </select>
                    <input class="m-3 btn btn-danger" type="submit" value="Crear"/>
                    <a class="btn redbtn red" href="./cartaPlatos.php">Volver</a>
                </div>
            </form>
        </div>
    </body>
</html>
';
?>