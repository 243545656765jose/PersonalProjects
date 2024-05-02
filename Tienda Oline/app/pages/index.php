<?php
include $_SERVER['DOCUMENT_ROOT'].'/app/shared/header.php';
?>
   <div class="container-sm ">
  <ul class="nav ">
    <li class="nav-item">
      <a class="nav-link active" href="login.php">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="my_suplementos.php">Perfil</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Gym</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Diavetes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Cancer</a>
    </li>
  </ul>
  </div>
<br><br>
  <div class="container-sm ">
    <div class=" container-sm row">
      <div class="col">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYAQ1M2D8byY8xQzSsUPPOXBim9PkdQ-U6n55apZFFcQ&s"
          alt="100" srcset="">
        <h2>Suplemetacion Gym</h2>
        <a href="http://" target="_blank" rel="noopener noreferrer">View</a>
      </div>
      <div class="col">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYAQ1M2D8byY8xQzSsUPPOXBim9PkdQ-U6n55apZFFcQ&s"
          alt="70" srcset="">
        <h2>Suplementacion Cardiovascular</h2>
        <a href="http://" target="_blank" rel="noopener noreferrer">View</a>
      </div>
      <div class="col">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYAQ1M2D8byY8xQzSsUPPOXBim9PkdQ-U6n55apZFFcQ&s"
          alt="100" srcset="">
        <h2>Suplementacion deportivo</h2>
        <a href="http://" target="_blank" rel="noopener noreferrer">View</a>
      </div>
    </div>
  </div>
</div>
<div class="container-sm">
  <h2>Cometarios</h2>
  <div class="row">
    <form action="">
      <div class="col-4">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea><br>
          <button type="Submit" class="btn btn-primary btn-sm">Enviar</button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/app/shared/footer.php';
?>