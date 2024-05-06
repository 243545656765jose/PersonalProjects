<?php
include $_SERVER['DOCUMENT_ROOT'].'/app/shared/header.php';
?>
<section class=" container-fluid d-flex justify-content-center align-items-center">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/app/public/img/car1.jpg" class="d-block w-200" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/app/public/img/car1.jpg" class="d-block w-200" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/app/public/img/car1.jpg" class="d-block w-200" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<h2 class="text-center">Barbero Profesional</h2>
<div class="container">
    <div class="row justify-content-between">
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="/app/public/img/barber2.jpg" class="card-img-top" alt="Barbero">
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="/app/public/img/barber.jpg" class="card-img-top" alt="Barbero">
                <div class="card-body d-flex justify-content-center">
                    <a href="#" class="me-2">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/1200px-Facebook_f_logo_%282019%29.svg.png" alt="Facebook" style="width: 30px;">
                    </a>
                    <a href="https://www.instagram.com/tony_music_12/">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/1024px-Instagram_icon.png" alt="Instagram" style="width: 30px;">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="/app/public/img/barber3.jpg" class="card-img-top" alt="Barbero">
            </div>
        </div>
    </div>
</div>






<div class="container-sm mt-3">
    <h2 class="text-center">Certificados</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center">
        <div class="col">
            <div class="card mb-3 col d-flex justify-content-center align-items-center">
                <img src="/app/public/img/d3.jpg" class="card-img-top pais_img" alt="100">
                <div class="card-body text-center">
                    <h5 class="card-title">Diploma</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3 col d-flex justify-content-center align-items-center">
                <img src="/app/public/img/d2.jpg" class="card-img pais_img" alt="100">
                <div class="card-body text-center">
                    <h5 class="card-title">Diploma</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3 col d-flex justify-content-center align-items-center">
                <img src="/app/public/img/d3.jpg" class="card-img-top pais_img" alt="100">
                <div class="card-body text-center">
                    <h5 class="card-title">Diploma</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3 col d-flex justify-content-center align-items-center">
                <img src="/app/public/img/d2.jpg" class="card-img-top pais_img" alt="100">
                <div class="card-body text-center">
                    <h5 class="card-title">Diploma</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3 col d-flex justify-content-center align-items-center">
                <img src="/app/public/img/d3.jpg" class="card-img-top pais_img" alt="100">
                <div class="card-body text-center">
                    <h5 class="card-title">Diploma</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3 col d-flex justify-content-center align-items-center">
                <img src="/app/public/img/d2.jpg" class="card-img-top pais_img" alt="100">
                <div class="card-body text-center">
                    <h5 class="card-title">Diploma</h5>
                </div>
            </div>
        </div>
    </div>
</div>
</div>




<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/app/shared/footer.php';
?>