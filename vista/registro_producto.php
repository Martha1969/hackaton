


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/31395939eb.js" crossorigin="anonymous"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../recursos/images/logohackaton.png" alt="" width="200" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fs-4 text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Productos
                        </a>
                        <ul class="dropdown-menu fs-5" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="registro_producto.php">Registrar producto</a></li>
                            <li><a class="dropdown-item" href="gestion_producto.php">Gestionar productos</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="row">
                    <div class="col fs-3 ">
                        <a href="principal.php"><i class="fa-solid fa-right-from-bracket text-light"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid">

        <div class="row mt-4 mb-4 justify-content-center">
            <div class="col text-center">
                <p class="fs-3">Registrar producto</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-lg-8">
                <div class="card card-outline card-sena elevation-2 shadow border-0">
                    <div class="card-body">
                        <form method="POST" action="" class="needs-validation" novalidate method="POST">
                            <input type="hidden" name="insertar" value="insertar">
                            <div class="form-row d-flex align-items-center flex-column">

                                <div class="form-group col-8 ">
                                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold">Nombre producto</label>
                                    <input class="form-control" name="nombre" type="text" maxlength="25" required>
                                </div>
                                <div class="form-group col-8">
                                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold">Precio</label>
                                    <input class="form-control" name="precio" type="text" maxlength="25" required>
                                </div>
                                <div class="form-group col-8">
                                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold">Cantidad</label>
                                    <input class="form-control" name="cantidad" type="text" maxlength="25" required>
                                </div>
                                <div class="form-group col-8">
                                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold">Descripcion</label>
                                    <input class="form-control" name="descripcion" type="text" maxlength="25" required>
                                </div>

                                <div class="form-group col-8 mt-3">
                                    <a class="btn w-100 btn-primary" type="submit" href="gestion_producto.php">Registrar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>