<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiempo</title>
</head>
<body>
    <?php
        date_default_timezone_set("America/Argentina/Buenos_Aires");//asignacion de zona horaria
        echo date("l m "), "de " ,date("F "), "de " ,date("o"), "<br>";//l es dia en letras, m el dia en numero con 0, F mes en letras, o año en numeros
        echo date("d/m/y"),"<br>";//d dia en numero, y año solo mostrando ultimos 2 numeros
        echo date("M j H:i a"),"<br>";//M mes en 3 letras, j dia sin 0, H formato 24horas con 0 iniciales,s minutos con 0 iniciales, a am o pm minuscula 
    ?>
</body>
</html>