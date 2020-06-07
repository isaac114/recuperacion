<?php
    
    $codigoPersona = $_GET['codigoPersona'];
    $placa = $_GET['placa'];
    $marca = $_GET['marca'];
    $modelo = $_GET['modelo'];
    echo $codigo;
    echo $placa;
    echo $marca;
    echo $modelo;

    include '../../config/conexioBD.php'; 

    $sql = "INSERT INTO vehiculo VALUES (0, '$marca', '$modela', '$placa','$codigoPersona')";

    if ($conn->query($sql) === TRUE) {
        header("Location: /recuperacion/public/controlador/BuscarPlaca.php/?placa=$placa");

    } else {
    if($conn->errno == 1062){
        //echo "<p class='error'>La persona con la cedula $cedula ya esta registrada en el sistema </p>";
    }else{
        echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
        }
    }
   

    //Cerrar BD
    //cerrar la base de datos
    $conn->close();
    


?>
