  $(document).ready(function(){
      $("#botonRT").click(function(){
        if (
          (document.getElementById('nombreRT').value == "")||
          (document.getElementById('apellidoRT').value == "")||
          (document.getElementById('emailRT').value == "")||
          (document.getElementById('telefonoRT').value == "")||
          (document.getElementById('arrivalRT').value == "")||
          (document.getElementById('timeRT').value == "")||
          (document.getElementById('numerodevueloRT').value == "")||
          (document.getElementById('numerodevuelodepartureRT').value == "")||
          (document.getElementById('departuredateRT').value == "")||
          (document.getElementById('departuretimeRT').value == "")||
          (!document.getElementById('terminosRT').checked)
           )
        {
          alert('Check the information, some fields are required and you must accept the terms and conditions of WingDingTravel.');
          document.getElementById("nombreRT").focus();
        }else{
          var formulario = $("#roundtripform").serializeArray();
          $.ajax({
            type: "POST",
            dataType: 'json',
            url: "../controller/guardarRoundtrip.php",
            data: formulario, 
            beforeSend: function () {
              $("#resultadoRT").html("Processing, please wait ...");
              $('#botonRT').hide();
            },
            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
              $('#resultadoRT').hide();
              $('#paypalbotonRT').show();
            }
          });
        }
      });

  });