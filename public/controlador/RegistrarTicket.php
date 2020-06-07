<?php
    $codigoAuto = $_GET['codigoAuto'];
    echo $codigoAuto;


    include '../../config/conexioBD.php'; 
    //'YYYY-MM-DD HH:MM:SS'
    date_default_timezone_set('Etc/GMT+5');
    $time = time();
    $fechaA = date("Y-m-d H:i:s");
    echo $fechaA;
    $sql = "INSERT INTO tiket VALUES (0, '$fechaA', '', '$codigoAuto')";

    if ($conn->query($sql) === TRUE) {
        echo'<script type="text/javascript">
        alert("Ticket Ingresado");
        window.location.href="/recuperacion/public/index.php";
        </script>';

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