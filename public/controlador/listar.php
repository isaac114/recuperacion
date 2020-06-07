<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <link rel="stylesheet" href="/Practica04-Mi-Agenda-Telefonica/admin/vista/css/tabla.css" type="text/css" />
 <script src="/Practica04-Mi-Agenda-Telefonica/admin/vista/JS/ventana_admin.js"></script>
 <title>Gestión de usuarios</title>
</head>
<body id="main-container">


 <table >
    <tr>
        <th>Cedula</th>
        <th>Nombres</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Placa Vehiculo</th>
        <th>Fecha Ingreso Ticket</th>
    </tr>
    <?php
    include '../../config/conexioBD.php';
    $sql = "SELECT * FROM cliente, tiket, vehiculo
            WHERE cliente.cli_codigo=vehiculo.fk_cliente AND vehiculo.ve_codigo=tiket.fk_vehiculo";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo " <td>" . $row["cli_cedula"] . "</td>";
            echo " <td>" . $row['cli_nombre'] ."</td>";
            echo " <td>" . $row['cli_direccion'] . "</td>";
            echo " <td>" . $row['cli_telefono'] . "</td>";
            echo " <td>" . $row['ve_placa'] . "</td>";
            echo " <td>" . $row['ti_fecha_hora_ingreso'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr>";
        echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
        echo "</tr>";
    }
    $conn->close();
    ?>
 </table>
 <a href="../../public/index.php"><p class="img-footer" id="piePaginaUser">Regresar</p></a>

</body>
</html>