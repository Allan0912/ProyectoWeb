<?php
include('conexion.php');
if(isset($_GET['id'])){
    $Documento = $_GET['id'];
    $consulta = "SELECT * FROM usuario WHERE Documento = $Documento";
    $resultado = mysqli_query($conexion, $consulta);
    if(mysqli_num_rows($resultado)==1){
        $row= mysqli_fetch_array($resultado);
        $nombre=$row['Nombre'];
        $apellido=$row['Apellidos'];
        $correo=$row['Correo'];
        $telefono=$row['Telefono'];
        $documento=$row['Documento'];
    }
    if(isset($_POST['Actualizar'])){
        $condicion=$_GET['id'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $correo=$_POST['correo'];
        $telefono=$_POST['telefono'];
        $documento=$_POST['documento'];
        $Actualizacoin="UPDATE usuario set Nombre = '$nombre', Apellidos = '$apellido',
                        Correo = '$correo', Telefono ='$telefono', Documento = '$documento'
                        WHERE Documento= $condicion";
        
        mysqli_query($conexion,$Actualizacoin);
        header("location: http://localhost/proyecto/html/historial_de_clientes.php");
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar usuario</title>
    <link rel="stylesheet" href="../css/registrar_usuario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="formulario">
                    <p><img src="../imagenes/logo.png" width="70" alt="">Automacicacion y mantenimiento</p>
                    <h1>Registrar usuario</h1>
                    <form method="post" action="editarUsuario.php?id=<?php echo $_GET['id']?>">
                        <div class="rellenar">
                            <input name="nombre" type="text" value="<?php echo $nombre?>"  autocomplete="off">
                            <label for="rellenar">Nombre</label>
                        </div>
                        <div class="rellenar">
                            <input name="apellido" type="text" value="<?php echo $apellido?>"  autocomplete="off">
                            <label>Apellido</label>
                        </div>
                        <div class="rellenar">
                            <input name="correo" type="email" value="<?php echo $correo?>"  autocomplete="off">
                            <label>Correo</label>
                        </div>

                        <div class="rellenar">
                            <input name="telefono" type="number" value="<?php echo $telefono?>"  autocomplete="off">
                            <label for="rellenar">Telefono</label>
                        </div>

                        <div class="rellenar">
                            <input name="documento" type="number" value="<?php echo $documento?>"   autocomplete="off">
                            <label>No.Identificacion</label>
                        </div>           
                        <div class="row col-2">
                            <div class="col-6">
                                <input type="submit" value="Cancelar" id="cancelar">
                            </div>
                            <div class="col-6">
                                <input type="submit" name="Actualizar" value="Actualizar" id="registrar">
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