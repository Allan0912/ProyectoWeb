<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar usuario</title>
    <link rel="stylesheet" href="../css/registrar_usuario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="formulario">
                    <p><img src="../imagenes/logo.png" width="70" alt="">Automatizacion y mantenimiento</p>
                    <h1>Registrar usuario</h1>
                    <form method="post" action="http://localhost/proyecto/conexion/registrar_Usuario.php">
                        <div class="rellenar">
                            <input name="nombre" type="text" required autocomplete="off">
                            <label for="rellenar">Nombre</label>
                        </div>
                        <div class="rellenar">
                            <input name="apellido"type="text" required autocomplete="off">
                            <label>Apellido</label>
                        </div>

                        <div class="rellenar">
                            <input name="correo" type="email" required autocomplete="off">
                            <label>Correo</label>
                        </div>

                        <div class="rellenar">
                            <input name="telefono" type="number" required autocomplete="off">
                            <label for="rellenar">Telefono</label>
                        </div>

                        <div class="rellenar">
                            <input name="documento" type="number" required autocomplete="off">
                            <label>No.Identificacion</label>
                        </div>

                        <div class="eleccion1">
                            <input type="radio" name="tipusu" value=1 onchange="mostrarCodigo()" required>
                            <label>Cliente</label>
                          </div>
                          <div class="eleccion">
                            <input type="radio" name="tipusu" value=2 onchange="mostrarCodigo()" required>
                            <label>Administrador</label>
                          </div>
                          <div class="rellenar " id="rellena"></div>
            
                        <div class="row col-2">
                            <div class="col-6">
                                <input type="submit" value="Cancelar" id="cancelar">
                            </div>
                            <div class="col-6">
                                <input type="submit" value="Registrar" id="registrar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
       
    </div>
    <script src="../indexJs/registraU.js"> </script>
</body>
</html>