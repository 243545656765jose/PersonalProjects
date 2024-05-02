
<?php
include $_SERVER['DOCUMENT_ROOT'].'/app/shared/header.php';
?><div class="container mt-5">
<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h3 class="mb-0">Registrarse User</h3>
        <a href="index.php">Atras</a>
      </div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <label for="username">Nombre de usuario</label>
            <input type="text" class="form-control" id="username" placeholder="Ingrese su nombre de usuario">
          </div>
          <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico">
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña">
          </div>
          <div class="form-group">
            <label for="confirm_password">Confirmar contraseña</label>
            <input type="password" class="form-control" id="confirm_password" placeholder="Confirme su contraseña">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>



<?php
include $_SERVER['DOCUMENT_ROOT'].'/app/shared/footer.php';
?>