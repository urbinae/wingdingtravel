  $(document).ready(function(){
      $("#botonpago").click(function(){
        if (
          (document.getElementById('tourname').value == "")||
          (document.getElementById('tourApellido').value == "")||
          (document.getElementById('tourEmail').value == "")||
          (document.getElementById('tourTelefono').value == "")||
          (document.getElementById('tourFecha').value == "")||
          (document.getElementById('tourHotel').value == "==SELECT==")||
          (!document.getElementById('tourTerminos').checked)
           )
        {
          alert('Check the information, some fields are required and you must accept the terms and conditions of WingDingTravel.');
          document.getElementById("tourname").focus();
        }else{
          var formulario = $("#reservartour").serializeArray();
          $.ajax({
            type: "POST",
            dataType: 'json',
            url: "../../controller/guardarTour.php",
            data: formulario, 
            beforeSend: function () {
              $("#resultadotour").html("Processing, please wait ...");
              $('#botonpago').hide();
            },
            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
              $('#resultadotour').hide();
              $('#paypalboton').show();
            }
          });
        }
      });

  });