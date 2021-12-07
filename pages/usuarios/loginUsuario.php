<?php
include '../header.php';
?>

    <div class="main d-flex justify-content-center align-items-center">
      <form class="card" action="login.php" method="post">
        <h4 class="card-header bg-dark text-white-50">Login</h4>
        <div class="card-body d-flex flex-column p-4 bg-light">
          <input class="m-3" type="email" name="email" placeholder="Email" required>
          <input class="m-3" type="password" name="contrasena" placeholder="contraseña" required>
          <input class="m-3 btn btn-danger" type="submit" value="Login" class="boton" />
        </div>
      </form>
    </div>
  </body>
</html>