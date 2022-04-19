<?php 
    session_start();
    $calle = $_POST['calle'];
    $numeroCalle = $_POST['numeroCalle'];
    $torre = $_POST['torre'];
    $piso = $_POST['piso'];
    $departamento = $_POST['departamento'];
    $pais = $_POST['pais'];
    $provincia = $_POST['provincia'];
    $localidad = $_POST['localidad'];
    $_SESSION['sesion']['calle'] = $calle;
    $_SESSION['sesion']['numeroCalle'] = $numeroCalle;
    $_SESSION['sesion']['torre'] = $torre;
    $_SESSION['sesion']['piso'] = $piso;
    $_SESSION['sesion']['departamento'] = $departamento;
    $_SESSION['sesion']['pais'] = $pais;
    $_SESSION['sesion']['provincia'] = $provincia;
    $_SESSION['localidad'] = $localidad;    
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
    
    <form class="row g-3" action="indexEJ7.php" method="post">

        <div class="row g-6">
            <h1>Recreacion</h1>
            <div class="col">
                <label for="">Hobbies</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Patinaje" id="patinaje" name="hobbie[]">
                    <label class="form-check-label" for="patinaje">
                      Patinaje
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Leer" id="leer" name="hobbie[]">
                    <label class="form-check-label" for="leer">
                      Leer
                    </label>
                </div>
            </div>
        </div>

        <div class="col-12">
          <button type="submit" name="submit" class="btn btn-primary">Registrarse</button>
        </div>
      </form>
</body>
</html>