<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Orden de servicio</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/Formulario_orden_de_servicio.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="../imagenes/logo.png" type="image/png" />
</head>

<body>
  <div class="container">
    <div class="cargando row">
      <div class="d-flex justify-content-center">
        <div class="spinner-border text-primary" role="status">
          <span class="visually-hidden">Cargando...</span>
        </div>
      </div>
    </div>
    <div class="Formulario row">
      <div class="col-12">
        <div class="formulario">
          <img src="../imagenes/logo.png" height="70" alt="" />
          <p class="logo">Automaticación y mantenimiento</p>
          <h1>Orden de servicio</h1>
          <div class="imgcliente">
            <i class="bx bxs-analyse"></i>
          </div>
          <form method="post" action="http://localhost/proyecto/conexion/registra_orden_servicio.php" id="form">
            <div class="rellenar">
              <input type="number" name="identificar" onblur="bucar_datos();" required id="identificar" autocomplete="off" />
              <label for="rellenar">N° de identifiacion</label>
            </div>

            <div class="rellenar" id="formulario2">
              <input type="datetime-local" id="fecha_ingreso" style="color: rgba(255, 255, 255, 0.644)" name="fechai" required />
              <label>Fecha de ingreso</label>
            </div>
            <div class="rellenar">
              <input type="text" name="nombre" required id="nombre" readonly style="color: #FFFFFF;" autocomplete="off" />
              <label for="rellenar">Nombre del cliente</label>
            </div>

            <div class="descripcion_ingreso" id="formulario2">
              <label>Descripción de ingreso</label>
              <textarea name="descripcioni" id="ingreso" cols="30" rows="10"></textarea>
            </div>
            <div class="rellenar">
              <input type="number" name="serial" id="serial" required autocomplete="off" />
              <label>N° serial de maquina</label>
            </div>

            <div class="rellenar" id="formulario2">
              <input type="datetime-local" id="fecha_actualizacion" style="color: rgba(255, 255, 255, 0.644)" name="fechaactualizacion" required />
              <label>Fecha de actualizacion</label>
            </div>
            <div class="descripcion_actualizacion" id="formulario2">
              <label>Descripcion de actualizacion</label>
              <textarea class="descripcion2" name="descripciona" id="ingreso" cols="30" rows="10"></textarea>
            </div>

            <div class="row">
              <div class="col-6">
                <input type="submit" value="Cancelar" id="cancelar" onclick="limpiar()" />
              </div>
              <div class="col-6">
                <input type="submit" value="Generar" id="editar" />
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>

<script type="text/javascript">
  $(document).ready(function() { //ocultar cargando
    $('.cargando').hide();
  });

  function bucar_datos() {
    {
      identificacion = $("#identificar").val();

      var parametros = {
        "buscar": "1",
        "doc": identificacion
      };
      $.ajax({
        data: parametros,
        dataType: 'json',
        url: 'http://localhost/proyecto/conexion/codigos.php',
        type: 'post',
        beforeSend: function() {
          $('.Formulario').hide();
          $('.cargando').show();
        },
        error: function() {
          alert("Error");
        },
        complete: function() {
          $('.Formulario').show();
          $('.cargando').hide();
        },
        success: function(valores) {
          if (valores.existe === "1") {
            $("#nombre").val(valores.nombre);
          } else {
            alert(valores.mensaje);
          }
        }
      })
    }
  }

  function limpiar() {
    $("#identificar").val("");
    $("#nombre").val("");
    $("#fecha_ingreso").val("");
    $("#ingreso").val("");
    $("#serial").val("");
    $("#fecha_actualizacion").val("");
    $(".descripcion2").val("");

  }
</script>