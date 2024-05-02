<?php
include $_SERVER['DOCUMENT_ROOT'].'/app/shared/header.php';
?>
<nav class="navbar navbar-expand navbar-light bg-faded">
    <div class="container-sm
    ">
        <a class="navbar-brand" href="#">My</a>
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="#" aria-current="page"
                    >Active
                    <span class="visually-hidden">(current)</span></a
                >
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="dropdownId"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Dropdown</a
                >
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">Action 1</a>
                    <a class="dropdown-item" href="#">Action 2</a>
                </div>
            </li>
        </ul>
        <form class="d-flex my-2 my-lg-0">
            <input
                class="form-control me-sm-2"
                type="text"
                placeholder="Search"
            />
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">
                Search
            </button>
        </form>
    </div>
</nav><br><br><br><br>

<div class="container-sm">
    <table class="table table-striped table-responsive">
        <thead>
            <tr>
            <td>#</td>
                <td>Nombre</td>
                <td>Code</td>
                <td>Descripcion</td>
                <td>Imagen</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Creatina</td>
                <td>234</td>
                <td>Grande</td>
                <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNoKz1ZhGQCKGDoPWb5kfuOjqMpaobghQDv0otnHp2Qo6anv-rKbdWeZZoQQssGwQYO9Y&usqp=CAU" class="img-fluid" alt="30" width="50"></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Creatina</td>
                <td>234</td>
                <td>Grande</td>
                <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNoKz1ZhGQCKGDoPWb5kfuOjqMpaobghQDv0otnHp2Qo6anv-rKbdWeZZoQQssGwQYO9Y&usqp=CAU" class="img-fluid" alt="30" width="50"></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Creatina</td>
                <td>234</td>
                <td>Grande</td>
                <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNoKz1ZhGQCKGDoPWb5kfuOjqMpaobghQDv0otnHp2Qo6anv-rKbdWeZZoQQssGwQYO9Y&usqp=CAU" class="img-fluid" alt="30" width="50"></td>
            </tr>
        </tbody>
    </table>

</div>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/app/shared/footer.php';
?>