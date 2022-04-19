<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form EJ5</title>
</head>
<body>
    <?php
        if(!$_POST){
            header('Location:formEJ5.html');
        }
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $dni = $_POST['dni'];
        $calle = $_POST['calle'];
        $numeroCalle = $_POST['numeroCalle'];
        $torre = $_POST['torre'];
        $piso = $_POST['piso'];
        $departamento = $_POST['departamento'];
        $pais = $_POST['pais'];
        $provincia = $_POST['provincia'];
        $localidad = $_POST['localidad'];
        $edad = $_POST['edad'];
        $hijos = $_POST['hijos'];

        include("../EJ6/indexEJ6.php");
    ?>
    <div>
        <p>Nombre: <?php echo $nombre ?></p>
        <p>Apellido: <?php echo $apellido?></p>
        <p>Email: <?php echo $email ?></p>
        <p>DNI: <?php echo $dni ?></p>
        <?php
            if(isset($_POST["sexo"])){
                if(count($_POST["sexo"]) >0){
                    echo "Sexo: ";
                    foreach($_POST["sexo"] as $value ){
                        echo "$value ";
                    }
                }
            }
        ?>
        <div>
            <h3>Direccion</h3>
            <p>Calle: <?php echo $calle ?></p>
            <p>Numero Calle: <?php echo $numeroCalle ?></p>
            <p>Torre: <?php echo $torre ?></p>
            <p>Piso: <?php echo $piso ?></p>
            <p>departamento: <?php echo $departamento ?></p>
        </div>
        
        <?php
            if(isset($_POST["hobbie"])){
                if(count($_POST["hobbie"]) >0){
                    echo "Hobbies: ";
                    foreach($_POST["hobbie"] as $value ){
                        echo "$value ";
                    }
                }
            }else{
                echo "No tienes hobbie";
            }
        ?>

        <?php
            if(isset($_POST["civil"])){
                if(count($_POST["civil"]) >0){
                    echo "<br><br> Estado Civil: ";
                    foreach($_POST["civil"] as $value ){
                        echo "$value ";
                    }
                }
            }
        ?>
        <p>Pais: <?php echo $pais ?></p>
        <p>Provincia: <?php echo $provincia ?></p>
        <p>Localidad: <?php echo $localidad ?></p>
        <p>Edad: <?php echo $edad ?></p>
        <p>Hijos: <?php echo $hijos ?></p>
    </div>

</body>
</html>