<?php
include $_SERVER['DOCUMENT_ROOT'].'/app/shared/header.php';
?>

<div class="container text-center">
            <div class="row">
                <div class="col">
                    <img src="/app/public/img/car1.jpg" class="img-fluid"
                        alt="Responsive image">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">

            </div>
        </div>
        <hr>
        <div class="container-sm">
            <div id="carouselExampleIndicators" class="carousel slide"
                data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/app/public/img/barber.jpg" class="d-block w-100"
                            alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="/app/public/img/barber2.jpg" class="d-block w-100"
                            alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="/app/public/img/barber3.jpg" class="d-block w-100"
                            alt="Slide 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button"
                    data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"
                        aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button"
                    data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"
                        aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <hr>
            <div id="carouselExampleIndicators2" class="carousel slide"
                data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/app/public/img/leyenda.jpeg" class="d-block w-100"
                            alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="/app/public/img/cc2.jpeg" class="d-block w-100"
                            alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="/app/public/img/cc4.jpeg" class="d-block w-100"
                            alt="Slide 3">
                    </div>
                    <div class="carousel-item">
                        <img src="/app/public/img/cc5.jpg" class="d-block w-100"
                            alt="Slide 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button"
                    data-bs-target="#carouselExampleIndicators2"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"
                        aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button"
                    data-bs-target="#carouselExampleIndicators2"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"
                        aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <hr>
            <div id="carouselExampleIndicators3" class="carousel slide"
                data-bs-ride="carousel">
                <h2 class="text-center">Competencias</h2>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/app/public/img/leyenda.jpeg" class="d-block w-100"
                            alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="/app/public/img/com1jpeg.jpeg" class="d-block w-100"
                            alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="/app/public/img/cc4.jpeg" class="d-block w-100"
                            alt="Slide 3">
                    </div>
                    <div class="carousel-item">
                        <img src="/app/public/img/cc5.jpg" class="d-block w-100"
                            alt="Slide 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button"
                data-bs-target="#carouselExampleIndicators3"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon"
                    aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button"
                data-bs-target="#carouselExampleIndicators3"
                data-bs-slide="next">
                <span class="carousel-control-next-icon"
                    aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
        <hr>

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/app/shared/footer.php';
?>