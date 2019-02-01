<?php

      @ $db = new mysqli(localhost, "eimar", "eimar", "nclocmgk_wingding2018");
      if ($db->connect_error)
        die('Error de Conexion ('.$db->connect_errno.')'.$db->connect_error); 

      mysqli_set_charset($db,'utf8'); 

?>
