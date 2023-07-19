<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cliente</title>
    <link rel="stylesheet" href="../css/codigo_recuperacion.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="contraseña.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="formulario">
            <h1>Recuperar Contraseña</h1>
            <div class="imgcliente">
                <i class='bx bxl-gmail'></i>
            </div>
            <form method="post">
              <div class="rellenar">
                <input type="text" required  id='identificar'onkeyup="cambiarColor" autocomplete="off"/>
                <label for="rellenar" id="indicacion">Digita tu codigo que se te envó a tu Gmail</label>
              </div>
              <div class="row col-2">
                <div class="col-6">
                  <input type="submit" value="Siguiente" id="Siguiente" />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="../indexJs/codigo_recuperacion.js"></script>
  </body>
</html>
