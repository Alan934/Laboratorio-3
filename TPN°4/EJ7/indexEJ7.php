<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form EJ7</title>
</head>
<body>
    <?php
        session_start();
        if(!$_POST){
            header('Location:formEJ7Datos.php');
        }
        $hobbie = $_POST['hobbie'];
        $_SESSION['sesion']['hobbie'] = $hobbie;
        echo "Nombre: ",$_SESSION['sesion']['nombre'];
        echo "<br>Apellido: ",$_SESSION['sesion']['apellido'];
        echo "<br>Email: ",$_SESSION['sesion']['email'];
        echo "<br>DNI: ",$_SESSION['sesion']['dni'];
        if(isset($_SESSION['sesion']['sexo'])){
            if(count($_SESSION['sesion']['sexo']) >0){
                echo "<br>Sexo: ";
                foreach($_SESSION['sesion']['sexo'] as $value ){
                    echo "$value ";
                }
            }
        }
        echo "<br>Edad: ",$_SESSION['sesion']['edad'];
        echo "<br>Hijos: ",$_SESSION['sesion']['hijos'];
        if(isset($_SESSION['sesion']['civil'])){
            if(count($_SESSION['sesion']['civil']) >0){
                echo "<br>Estado Civil: ";
                foreach($_SESSION['sesion']['civil'] as $value ){
                    echo "$value ";
                }
            }
        }
        if(isset($_SESSION['sesion']['hobbie'])){
            if(count($_SESSION['sesion']['hobbie']) >0){
                echo "<br>Hobbies: ";
                foreach($_SESSION['sesion']['hobbie'] as $value ){
                    echo "$value ";
                }
            }
        }else{
            echo "No tienes hobbie";
        }
        echo "<br>Calle: ",$_SESSION['sesion']['calle'];
        echo "<br>Numero de Calle: ",$_SESSION['sesion']['numeroCalle'];
        echo "<br>Torre: ",$_SESSION['sesion']['torre'];
        echo "<br>Piso: ",$_SESSION['sesion']['piso'];
        echo "<br>Departamento: ",$_SESSION['sesion']['departamento'];
        echo "<br>Pais: ",$_SESSION['sesion']['pais'];
        echo "<br>Provincia: ",$_SESSION['sesion']['provincia'];
        echo "<br>Localidad: ",$_SESSION['localidad'];
    ?>

    <!--<?php
        echo"<pre>";
        print_r($_SESSION['sesion']);
        echo"<pre>";
    ?>-->

    <form action="">
        <?php 
            unset($_SESSION['sesion']);
        ?>
        <button>Borrar sesion</button>
    </form>
</body>
</html>