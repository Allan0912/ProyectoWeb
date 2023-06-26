<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Actualizar maquina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../imagenes/logo.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="../css/actualizar_maquina_O_R.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="formulario">
            <img  src="../imagenes/logo.png" height="70" alt="">
            <p class="logo">Automaticación y mantenimiento</p>
            <h1>Actualizaciones de maquina</h1>
            <div class="imgcliente">
              <i class='bx bxs-analyse'></i>
            </div>
            <form method="post">
              <div class="rellenar">
                <input type="text" required  id='identificar'onkeyup="cambiarColor"/>
                <label for="rellenar">Tipo de maquina</label>
              </div>

              <div class="rellenar">
                <input type="text" required />
                <label>Marca</label>
              </div>

              <div class="rellenar">
                <input type="text" required />
                <label>No.Serial</label>
              </div>

              <div class="rellenar">
                <input type="datetime-local"s style="color: rgba(255, 255, 255, 0.644);" required />
                <label>Fecha de ingreso</label>
              </div>

              <div class="rellenar">
                <textarea name="" id="ingreso" cols="30" rows="10"></textarea>
                <label>Descripción de ingreso</label>
              </div>

              <div class="row">
                <div class="col-6">
                  <input type="submit" value="Cancelar" id="cancelar" />
                </div>
                <div class=" col-6">
                  <input type="submit" value="Siguiente" id="siguiente">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="../index js del proyecto/registrar_maquina_orden.js"></script>

  </body>
</html>
