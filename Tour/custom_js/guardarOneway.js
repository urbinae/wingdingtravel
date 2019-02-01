  $(document).ready(function(){
      $("#botonOW").click(function(){
        if (
          (document.getElementById('nombreOW').value == "")||
          (document.getElementById('apellidoOW').value == "")||
          (document.getElementById('emailOW').value == "")||
          (document.getElementById('telefonoOW').value == "")||
          (document.getElementById('arrivalOW').value == "")||
          (document.getElementById('timeOW').value == "")||
          (document.getElementById('numerodevueloOW').value == "")||
          (!document.getElementById('terminosOW').checked)
           )
        {
          alert('Check the information, some fields are required and you must accept the terms and conditions of WingDingTravel.');
          document.getElementById("nombreOW").focus();
        }else{
          var formulario = $("#onewayform").serializeArray();
          $.ajax({
            type: "POST",
            dataType: 'json',
            url: "../controller/guardarOneway.php",
            data: formulario, 
            beforeSend: function () {
              $("#resultadoOW").html("Processing, please wait ...");
              $('#botonOW').hide();
            },
            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
              $('#resultadoOW').hide();
              $('#paypalbotonOW').show();
            }
          });
        }
      });

  });