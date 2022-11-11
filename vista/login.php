<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../recursos/js/direccionarlogin.js"></script>
</head>
<body style="height: 100vh;display: flex;align-items: center;justify-content: center;background: linear-gradient(to right, #6f84e2, #78afdd);">
    <div class="login" style="background-color: white; padding: 50px;border-radius: 30px;">
        <h1>INICIO DE SESION</h1>
        <form action="">
            <div class="form-group">
                <label class="form-label" for="email" style="font-weight: bold;">correo</label>
                <input class="form-control" type="email"id="email">
            </div>
            <div class="form-group" style="margin-top: 20px;">
                <label class="form-label" for="password"style="font-weight: bold;">contraseña</label>
                <input class="form-control" type="password"id="password">
            </div>
            <a class="btn btn-outline-primary w-100" value="" style="margin-top: 50px;" href="gestion_producto.php">INGRESAR</a>
        </form>
    </div>
</body>
</html>