<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Actualizaciones de maquina</title>
    <link rel="stylesheet" href="../css/actualizaciones_de_maquina.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../imagenes/logo.png" type="image/png">

  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="formulario">
            <img  class="mt-2" src="../imagenes/logo.png" height="70" alt="">
            <p class="logo">Automaticación y mantenimiento</p>
            <h1>Actualizaciones de maquina</h1>
            <div class="imgcliente">
              <i class='bx bxs-analyse'></i>
            </div>
            <form method="post">
              <div class="rellenar">
                <input type="datetime-local" style="color: white;"required onkeyup="cambiarColor"/>
                <label for="rellenar">Fecha de actulización</label>
              </div>

              <div class="rellenar">
                <textarea name="" id="detalle" cols="30" rows="10"></textarea>
                <label>Detalles de actualización</label>
              </div>

              <div class="rellenar">
                <input type="datetime-local" style = "color: white;" required />
                <label>Fecha de finalización</label>
              </div>

              <div class="row mt-5">
                <div class="col-6">
                  <input type="submit" value="Anterior" id="anterior" />
                </div>
                <div class="col-6">
                  <input type="submit" value="Finalizar edicion" id="finalizar">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
