<?php
    
  if(isset($_POST["numerodevueloRT"]))
  {
    $fechaRT = $_POST["fechaRT"];
    $idRT = $_POST["idRT"];
    $nombreRT = $_POST["nombreRT"];
    $apellidoRT = $_POST["apellidoRT"];
    $emailRT = $_POST["emailRT"];
    $telefonoRT = $_POST["telefonoRT"];

    $servicioRT = $_POST["servicioRT"];
    $desdeRT = $_POST["desdeRT"];
    $hastaRT = $_POST["hastaRT"];
    $adultosRT = $_POST["adultosRT"];
    $ninosRT = $_POST["ninosRT"];
    $infantesRT = $_POST["infantesRT"];

    $asientoninoRT = $_POST["asientoninoRT"];
    $cervezaRT = $_POST["cervezaRT"];
    $aguaRT = $_POST["aguaRT"];
    $sodaRT = $_POST["sodaRT"];

    $arrivalRT = $_POST["arrivalRT"];
    $timeRT = $_POST["timeRT"];
    $aerolineaRT = $_POST["aerolineaRT"];
    $numerodevueloRT = $_POST["numerodevueloRT"];

    $aerolineadepartureRT = $_POST["aerolineadepartureRT"];
    $numerodevuelodepartureRT = $_POST["numerodevuelodepartureRT"];
    $departuredateRT = $_POST["departuredateRT"];
    $departuretimeRT = $_POST["departuretimeRT"];
    $sugerenciatimeRT = $_POST["sugerenciatimeRT"];

    $equipajeRT = $_POST["equipajeRT"];
    $notasRT = $_POST["notasRT"];

    $totalRT = $_POST["totalRT"];
   
    $consulta = "INSERT INTO roundtrip (fecha, id, nombre, apellido, email, telefono, servicio, desde, hasta, adultos, ninos, infantes, asientonino, cerveza, agua, soda, arrival, tiempo, aerolinea, numerodevuelo, aerolineasalida, numerodevuelosalida, fechasalida, horasalida, recogidasalida, equipaje, notas, total, estatus)VALUES('".utf8_decode($fechaRT)."','".utf8_decode($idRT)."','".utf8_decode($nombreRT)."','".utf8_decode($apellidoRT)."','".utf8_decode($emailRT)."','".utf8_decode($telefonoRT)."','".utf8_decode($servicioRT)."','".utf8_decode($desdeRT)."','".utf8_decode($hastaRT)."','".utf8_decode($adultosRT)."','".utf8_decode($ninosRT)."','".utf8_decode($infantesRT)."','".utf8_decode($asientoninoRT)."','".utf8_decode($cervezaRT)."','".utf8_decode($aguaRT)."','".utf8_decode($sodaRT)."','".utf8_decode($arrivalRT)."','".utf8_decode($timeRT)."','".utf8_decode($aerolineaRT)."','".utf8_decode($numerodevueloRT)."','".utf8_decode($aerolineadepartureRT)."','".utf8_decode($numerodevuelodepartureRT)."','".utf8_decode($departuredateRT)."','".utf8_decode($departuretimeRT)."','".utf8_decode($sugerenciatimeRT)."','".utf8_decode($equipajeRT)."','".utf8_decode($notasRT)."','".utf8_decode($totalRT)."','Processing')";

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