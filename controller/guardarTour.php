<?php
    
  if(isset($_POST["tourTelefono"]))
  {
    $fecha = $_POST["fecha"];
    $tourid = $_POST["tourid"];
    $tournombre = $_POST["tournombre"];
    $tourname = $_POST["tourname"];
    $tourApellido = $_POST["tourApellido"];
    $tourEmail = $_POST["tourEmail"];

    $tourTelefono = $_POST["tourTelefono"];
    $tourFecha = $_POST["tourFecha"];
    $tourHotel = $_POST["tourHotel"];
    $tourTurno = $_POST["tourTurno"];
    $tourRecogidadelhotel = $_POST["tourRecogidadelhotel"];
    $tourAdultos = $_POST["tourAdultos"];

    $tourNinos = $_POST["tourNinos"];
    $tourInfantes = $_POST["tourInfantes"];
    $tourTotal = $_POST["tourTotal"];

    $consulta = "INSERT INTO tour_reservas (fecha, id, tour, nombre, apellido, email, telefono, fechaexcursion, hotel, turno, recogida, adultos, ninos, infantes, total, estatus)VALUES('".utf8_decode($fecha)."','".utf8_decode($tourid)."','".utf8_decode($tournombre)."','".utf8_decode($tourname)."','".utf8_decode($tourApellido)."','".utf8_decode($tourEmail)."','".utf8_decode($tourTelefono)."','".utf8_decode($tourFecha)."','".utf8_decode($tourHotel)."','".utf8_decode($tourTurno)."','".utf8_decode($tourRecogidadelhotel)."','".utf8_decode($tourAdultos)."','".utf8_decode($tourNinos)."','".utf8_decode($tourInfantes)."','".utf8_decode($tourTotal)."','Processing')";

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