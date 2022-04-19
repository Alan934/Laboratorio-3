<?php 
    session_start();
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $dni = $_POST['dni'];
    $edad = $_POST['edad'];
    $hijos = $_POST['hijos'];
    $sexo = $_POST['sexo'];
    $civil = $_POST['civil'];
    $_SESSION['sesion']['nombre'] = $nombre;
    $_SESSION['sesion']['apellido'] = $apellido;
    $_SESSION['sesion']['email'] = $email;
    $_SESSION['sesion']['dni'] = $dni;
    $_SESSION['sesion']['edad'] = $edad;
    $_SESSION['sesion']['hijos'] = $hijos;
    $_SESSION['sesion']['sexo'] = $sexo;
    $_SESSION['sesion']['civil'] = $civil;
    if($_SESSION['sesion']['edad'] < 18){
        echo "No es mayor de 18 años, no puede iniciar sesion";
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <form class="row g-3" action="formEJ7Recreacion.php" method="post">
        <div class="row g-6">
            <h1>Direccion</h1>
            <div class="col">
                <div>
                    <label for="calle" class="form-label">Calle</label>
                    <input type="text" class="form-control" id="calle" placeholder="Main St" name="calle" required>
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="numeroCalle" class="form-label">Numero Calle</label>
                    <input type="number" class="form-control" id="numeroCalle" placeholder="123" name="numeroCalle" required>
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="torre" class="form-label">Torre</label>
                    <input type="text" class="form-control" id="torre" name="torre">
                </div>
                
            </div>
            <div class="col">
                <div>
                    <label for="piso" class="form-label">Piso</label>
                    <input type="number" class="form-control" id="piso" name="piso">
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="departamento" class="form-label">Departamento</label>
                    <input type="text" class="form-control" id="departamento" name="departamento">
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="pais" class="form-label">Pais</label>
                    <input type="text" class="form-control" id="pais" name="pais" required>
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="provincia" class="form-label">Provincia</label>
                    <input type="text" class="form-control" id="provincia" name="provincia" required>
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="localidad" class="form-label">Localidad</label>
                    <input type="text" class="form-control" id="localidad" name="localidad" required>
                </div>
            </div>
        </div>

        <div class="col-12">
          <button type="submit" name="submit" class="btn btn-primary">Siguiente</button>
        </div>
      </form>
</body>
</html>