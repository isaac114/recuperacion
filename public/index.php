<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="agenda, telefonia, contactos">
    <link rel="stylesheet" href="/chavezchamorro-eduardoisaac-examen/public/css/diseños.css" type="text/css" />
    <link rel="stylesheet" href="/chavezchamorro-eduardoisaac-examen/public/css/formulario.css" type="text/css" />
    <link rel="stylesheet" href="/chavezchamorro-eduardoisaac-examen/public/buscar.js" type="text/css" />
    <script src="../JS/ventana_admin.js"></script>
    <title>Servicio de Parqueadero</title>
</head>
<body>
    <header>
        <div id="contenedor">
            <div id="mensajeria">
                <a href="/recuperacion/public/controlador/listar.php"><p class="img-footer" id="piePaginaUser">Listar Tickets</p></a>
            </div>
        </div>
    </header>
    
    <section class="registro" >
        <h2>Registro de Ticket</h2>
        <form  class="formulario" name="formulario_registro"  method="POST" action = "/recuperacion/public/controlador/BuscarCedula.php">
            <?php $fcha = date("Y-m-d");?>
            <input type="date" class="controles"  name="fecha" value="<?php echo $fcha;?>">
            <span id="mensajeCedula" ></span><br>

            <input class="controles" type="text" name="placa" id="n1" placeholder="Placa de Vehiculo" >
            <span id="mensajenombre" ></span><br>

            <input class="controles" type="text" name="marca" id="n1" placeholder="Marca de Vehiculo" >
            <span id="mensajeapellido" ></span><br>

            <input class="controles" type="text" name="modelo" id="n2" placeholder="Modelo de Vehiculo" >

            <input class="controles" type="text" name="cedula" id="cedula" placeholder="Cedula del cliente" onkeyup="showHint(this.value)">
            <span id="mensajecorreo" ></span><br>

            
            
            <input class="botones" type="submit" value="Registrar" >
        </form>

    </section>


    <script>
        function showHint(str) {
        if (str.length == 0) {
            document.getElementById("mensajecorreo").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("mensajecorreo").innerHTML = this.responseText;
            }
            };
            xmlhttp.open("GET", "/recuperacion/public/controlador/buscar.php?q=" + str, true);
            xmlhttp.send();
        }
        }
    </script>

   
</body>
</html>