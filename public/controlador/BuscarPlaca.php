<?php
    //incluir conexión a la base de datos
    include '../../config/conexioBD.php'; 
    $placa = $_GET['placa'];
    echo $placa;
    $sql = "SELECT * FROM vehiculo WHERE ve_placa LIKE '%" .$placa. "%'";

    $result = $conn->query($sql);

    if($result->num_rows > 0) {

        while($row = $result->fetch_assoc()){
            echo "<p>Muy Bien</p>";
            $mcodif = $row["ve_codigo"] ;
            
        }
        header("Location: /recuperacion/public/controlador/RegistrarTicket.php/?codigoAuto=$mcodif");

    } else {
        echo'<script type="text/javascript">
        alert("BuscarPlaca");
        window.location.href="../../public/vista/index.php";
        </script>';

    }
    $conn->close();

    
?>