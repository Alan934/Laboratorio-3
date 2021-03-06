<?php 
    session_start();
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
    
    <form class="row g-3" action="formEJ7Direccion.php" method="post">
        <h1>Datos Personales</h1>
        <div class="row g-3">
            <div class="col">
                <label for="">Nombre</label>
                <input type="text" class="form-control" aria-label="nombre" name="nombre" required>
            </div>
            <div class="col">
                <label for="">Apellido</label>
                <input type="text" class="form-control" aria-label="apellido" name="apellido" required>
            </div>
        </div>

        <div class="row g-3">
            <div class="col">
                <label for="">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email" required>
            </div>
            <div class="col">
                <label for="">DNI</label>
                <input type="number" class="form-control" aria-label="dni" name="dni" required>
            </div>
        </div>

        <div  class="row g-6">
            <div class="col">
                <label for="">Sexo</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo[]" value="Maculino" id="flexRadioDefault1" required>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Masculino
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo[]" value="Femenino" id="flexRadioDefault1" required>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Femenino
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo[]" value="Indefinido" id="flexRadioDefault2" required>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Indefinido
                    </label>
                </div>
            </div>
        </div>

        <div class="row g-6">
            <div class="col">
                <label for="">Estado Civil</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="civil[]" required>
                    <option value="Soltero :)">Soltero</option>
                    <option value="Casado :!">Casado</option>
                    <option value="Viudo :C">Viudo</option>
                    <option value="Divorciado ;]">Divorciado</option>
                </select>
            </div>
            
            <div class="col">
                <div>
                    <label for="edad" name="edadU" class="form-label">Edad</label>
                    <input type="number" class="form-control" id="edad" name="edad" required>
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="hijos" class="form-label">Hijos</label>
                    <input type="number" class="form-control" id="hijos" name="hijos">
                </div>
            </div>
        </div>

        <div class="col-12">
            <button type="submit" href="formEJDireccion" name="submit" class="btn btn-primary">Siguiente</button>
        </div>
      </form>
</body>
</html>