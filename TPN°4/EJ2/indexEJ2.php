<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas</title>
</head>
<body>
    <?php
        echo "<h1>Tablas de multiplicar</h1>";
        $j=4;
        $aux=1;
        while($aux<=3){
            echo "<table border='1px' style='float: left; margin-left: 1%;'";
            for($i=0; $i<=10; $i++){
                $multi = $i * $j;
                echo"<tr>";
                echo"<td>$j X $i =</td>";
                echo"<td> $multi</td>";
                echo"<tr>";
            }
            echo"</table>";
            $j++;
            $aux++;
        }
    ?>
</body>
</html>