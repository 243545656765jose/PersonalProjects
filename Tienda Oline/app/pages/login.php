<?php
include $_SERVER['DOCUMENT_ROOT'].'/app/shared/header.php';
?>

<div class="container-center mt-5 text-center">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="mb-0">Iniciar sesión - Suplementos</h3>
        </div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <label for="username">Usuario</label>
              <input type="text" class="form-control" id="username" placeholder="Ingrese su usuario">
            </div>
            <div class="form-group">
              <label for="password">Contraseña</label>
              <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña">
            </div>
            <a href="http://">Registrase</a>
            <br>
            <button type="submit" class="btn btn-primary btn-block float-right">Iniciar sesión</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/app/shared/footer.php';
?>
