<?php
    
  if(isset($_POST["numerodevueloOW"]))
  {
    $fechaOW = $_POST["fechaOW"];
    $idOW = $_POST["idOW"];
    $nombreOW = $_POST["nombreOW"];
    $apellidoOW = $_POST["apellidoOW"];
    $emailOW = $_POST["emailOW"];
    $telefonoOW = $_POST["telefonoOW"];

    $servicioOW = $_POST["servicioOW"];
    $desdeOW = $_POST["desdeOW"];
    $hastaOW = $_POST["hastaOW"];
    $adultosOW = $_POST["adultosOW"];
    $ninosOW = $_POST["ninosOW"];
    $infantesOW = $_POST["infantesOW"];

    $asientoninoOW = $_POST["asientoninoOW"];
    $cervezaOW = $_POST["cervezaOW"];
    $aguaOW = $_POST["aguaOW"];
    $sodaOW = $_POST["sodaOW"];

    $arrivalOW = $_POST["arrivalOW"];
    $timeOW = $_POST["timeOW"];
    $aerolineaOW = $_POST["aerolineaOW"];
    $numerodevueloOW = $_POST["numerodevueloOW"];

    $equipajeOW = $_POST["equipajeOW"];
    $notasOW = $_POST["notasOW"];

    $totalOW = $_POST["totalOW"];
   
    $consulta = "INSERT INTO oneway (fecha, id, nombre, apellido, email, telefono, servicio, desde, hasta, adultos, ninos, infantes, asientonino, cerveza, agua, soda, arrival, tiempo, aerolinea, numerodevuelo, equipaje, notas, total, estatus)VALUES('".utf8_decode($fechaOW)."','".utf8_decode($idOW)."','".utf8_decode($nombreOW)."','".utf8_decode($apellidoOW)."','".utf8_decode($emailOW)."','".utf8_decode($telefonoOW)."','".utf8_decode($servicioOW)."','".utf8_decode($desdeOW)."','".utf8_decode($hastaOW)."','".utf8_decode($adultosOW)."','".utf8_decode($ninosOW)."','".utf8_decode($infantesOW)."','".utf8_decode($asientoninoOW)."','".utf8_decode($cervezaOW)."','".utf8_decode($aguaOW)."','".utf8_decode($sodaOW)."','".utf8_decode($arrivalOW)."','".utf8_decode($timeOW)."','".utf8_decode($aerolineaOW)."','".utf8_decode($numerodevueloOW)."','".utf8_decode($equipajeOW)."','".utf8_decode($notasOW)."','".utf8_decode($totalOW)."','Processing')";

    $conexion = new mysqli("localhost","nclocmgk_miguel","miguel2018","nclocmgk_wingding2018");
 
    $respuesta = new stdClass();
     
    if($conexion->query($consulta)){
        $respuesta->mensaje = "Select the payment method please.";
    }
    else {
        $respuesta->mensaje = "An error occurred.";
    }
    echo json_encode($respuesta);

  }

?>