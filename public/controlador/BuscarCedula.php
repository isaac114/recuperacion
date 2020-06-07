<?php

   

    include '../../config/conexioBD.php';

    $usuario = isset($_POST["cedula"]) ? trim($_POST["cedula"]) : null;
    $placa = isset($_POST["placa"]) ? trim($_POST["placa"]) : null;
    $marca = isset($_POST["marca"]) ? trim($_POST["marca"]) : null;
    $modelo = isset($_POST["modelo"]) ? trim($_POST["modelo"]) : null;

    $sql = "SELECT * FROM cliente WHERE cli_cedula LIKE '%" .$usuario. "%'";

    $result = $conn->query($sql);

    if($result->num_rows > 0) {

        while($row = $result->fetch_assoc()){
            $mcodif = $row["cli_codigo"] ;
            
        }
        header("Location: /recuperacion/public/controlador/RegistrarAuto.php/?codigoPersona=$mcodif&placa=$placa&marca=$marca&modelo=$modelo");

    } else {
        echo'<script type="text/javascript">
        alert("Cedula mal Ingresada");
        window.location.href="../../public/vista/index.php";
        </script>';

    }

    $conn->close();

?>