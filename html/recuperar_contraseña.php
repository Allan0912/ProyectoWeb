<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cliente</title>
    <link rel="stylesheet" href="../css/recuperar_contraseña.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="formulario">
            <h1>Recuperar contraseña</h1>
            <div class="imgcliente">
                <i class='bx bxs-key'></i>
            </div>
            <form method="post">
              <div class="rellenar">
                <input type="password" required  id='identificar'onkeyup="cambiarColor"/>
                <label for="rellenar">Escribe tu nueva contraseña</label>
              </div>

              <div class="rellenar">
                <input type="password" required />
                <label>Confirmar contraseña</label>
              </div>

              <div class="row col-2">
                <div class="col-6">
                  <input type="submit" value="cambiar" id="cambiar" />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="funcionjs.js"></script>
  </body>
</html>
