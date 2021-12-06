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
    $titulo=($_GET["titulo"]);
    $comensales=($_GET["comensales"]);

    echo '
        <div class="main d-flex justify-content-center align-items-center">
            <form class="card" action="editarPlatoSubmit.php" method="post">
                <h5 class="card-header bg-dark text-white-50">Editar ' . ($_GET["titulo"]) . '</h5>
                <div class="card-body d-flex flex-column p-4 bg-light">
                    <label for="titulo">Título</label>
                    <input class="m-3" type="text" name="titulo" value="' .$titulo. '" pattern="^[A-Za-z0-9 ]{3,50}$" title="Min. 3 caracteres y no admite caracteres especiales" required/>
                    <label for="comensales">Comensales</label>
                    <input class="m-3" type="number" name="comensales" value="' .$comensales. '" min="1" max="9" required/>
                    <label for="tipo">Tipo</label>
                    <select class="m-3" name="tipo">
                        <option value="Principal">Principal</option>
                        <option value="Secundario">Secundario</option>
                        <option value="Postre">Postre</option>   
                    </select>
                    <input type="hidden" name="id" value="' .$id. '" />
                    <input class="m-3 btn btn-danger" type="submit" value="Editar" />
                    <a class="btn red" href="./cartaPlatos.php">Volver</a>
                </div>
            </form>
        </div>
    </body>
    ';
?>