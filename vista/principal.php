<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/logohackaton.png" style="width: 400px; height: 100px;" alt="" width="30" height="24">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 60px;">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"
                            style="font-family:Verdana, Geneva, Tahoma, sans-serif;font-weight: 700;font-size: large;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"
                            style="padding-left: 100px;font-family:Verdana, Geneva, Tahoma, sans-serif;font-weight: 700;font-size: large;">Niños</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"
                            style="padding-left: 100px;font-family:Verdana, Geneva, Tahoma, sans-serif;font-weight: 700;font-size: large;">Niñas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"
                            style="padding-left: 100px;font-family:Verdana, Geneva, Tahoma, sans-serif;font-weight: 700;font-size: large;">Hombres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"
                            style="padding-left: 100px;font-family:Verdana, Geneva, Tahoma, sans-serif;font-weight: 700;font-size: large;">Mujeres</a>
                    </li>
                    <li class="nav-item">
                        <form class="d-flex">
                            <input class="form-control me-2" style="border: 1px solid blue;" type="search"
                                placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-primary"
                                style="width: 100px;border-radius: 50px;margin-right: 30px;"
                                type="submit">Search</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a href="administrador.html" class="btn btn-outline-primary"
                            style="width: 100px; border-radius: 50px;">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Banner container -->
    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/uno.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/logohackaton.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/logohackaton.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!--  -->
    <div class="container-fluid">
        <div class="row text-center justify-content-center">
            <div class="col-4" style="width: 18rem;">
                <div class="card">
                    <div class="row">
                        <div class="col d-flex align-items-center " style="height: 300px;">
                            <img src="images/logohackaton.png" class="img-fluid" alt="...">
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">$5.000</h5>
                        <p class="card-text">Hola soy un nuevo producto</p>
                        <a href="#" class="btn btn-primary">Ver más detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-4" style="width: 18rem;">
                <div class="card">
                    <div class="row">
                        <div class="col d-flex align-items-center " style="height: 300px;">
                            <img src="images/logohackaton.png" class="img-fluid" alt="...">
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">$5.000</h5>
                        <p class="card-text">Hola soy un nuevo producto</p>
                        <a href="#" class="btn btn-primary">Ver más detalles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<script src="https://kit.fontawesome.com/31395939eb.js" crossorigin="anonymous"></script>

</html>