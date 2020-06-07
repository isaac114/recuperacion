<?php

    include '../../config/conexioBD.php';

    $salida = "";

    
     $q = $conn->real_escape_string($_GET['q']);
     /*$sql = "SELECT *
                  FROM cliente
                  WHERE cli_cedula LIKE '%" .$q. "%' ";*/
    $sql = "SELECT *
    FROM cliente
    WHERE cli_cedula=$q";
    

    $result = $conn->query($sql);

    if($result->num_rows > 0) {

        while($row = $result->fetch_assoc()){
            $nombre = $row["cli_nombre"] ;
            $telf = $row["cli_telefono"];
            $dir = $row["cli_direccion"];
             
        }

        $salida = "Nmbr:$nombre, Telf:$telf, Dir:$dir";
       

    } else {
        echo'No Registrado';

    }

    echo $salida;

    $conn->close();

?>