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
        
    $id=($_GET["id"]);
    $nombre=($_GET["nombre"]);
    $cantidad=($_GET["cantidad"]);

    echo '
        <div class="main d-flex justify-content-center align-items-center">
            <form class="card" action="editarIngredienteSubmit.php" method="post">
            <h5 class="card-header bg-dark text-white-50">Editar ' . $nombre . '</h5>
            <div class="card-body d-flex flex-column p-4 bg-light">
                <label for="nombre">Ingrediente</label>
                <input class="m-3" type="text" name="nombre" value="' . $nombre . '" pattern="^[A-Za-z0-9 ]{3,50}$" title="Min. 3 caracteres y sin caracteres especiales" required/>
                <label for="cantidad">Cantidad</label>
                <input class="m-3" type="number" name="cantidad" value="' . $cantidad . '" min="1" required/>
                <input type="hidden" name="id" value="' . $id . '" />
                <input class="m-3 btn btn-danger" type="submit" value="Editar" />
                <a class="btn red" href="./mostrarIngrediente.php">Volver</a>
            </div>
            </form>
        </div>
    </body>
    ';
?>