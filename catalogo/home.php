<?php

require 'config/database.php';
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id,nombre,precio FROM productos WHERE activo=1");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tienda!!</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>


  <header>
    <div class="navbar navbar-dark bg-dark navbar-expand-lg">
      <div class="container">
        <a href="#" class="navbar-brand">
          <strong>Tienda Online</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
          aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link active" href="#">Catalogo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contacto</a>
            </li>
        </div>
      </div>
    </div>
  </header>

  <main>
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 pt-5">
        <?php foreach ($resultado as $row) { ?>
        <div class="col">
          <div class="card shadow-sm  ">
            <?php

          $id = $row['id'];
          $imagen = "img/productos/" . $id . "/principal.png";

          if (!file_exists($imagen)) {
            $imagen = "img/productos/noimg.png";
          }
            ?>
            <img style="height:300px;
  width:100%;" src="<?php echo $imagen; ?>">
            <div class="card-body">
              <h5 class="card-text">
                <?php echo $row['nombre'] ?>
              </h5>
              <p class="card-text">
                <?php echo $row['precio'] ?>
              </p>
              <div class="d-flex">
                <a href="" class="btn btn-primary">Detalles</a>
                <a href="" class="btn btn-success ms-3">Agregar</a>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </main>
  

</body>

</html>