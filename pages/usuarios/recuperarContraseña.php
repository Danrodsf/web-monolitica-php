<?php
include '../header.php';
?>

    <div class="main d-flex justify-content-center align-items-center">
      <form class="card" action="recuperar.php" method="post">
        <h5 class="card-header bg-dark text-white-50">Recuperar Contraseña</h5>
        <div class="card-body d-flex flex-column p-3 bg-light">
          <input class="m-3" type="email" name="email" placeholder="email">
          <input class="m-3 btn btn-danger" type="submit" value="Recuperar" class="boton" />
          <a class="m-3 btn red" href="../../index.php">Volver</a>
        </div>
      </form>
    </div>
  </body>
</html>