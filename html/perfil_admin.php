<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../css/perfil_admin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Mi perfil</title>
  </head>
  <body>
    <div class="container">
      <div class="container-banner">
        <div class="banner">
          <label for="imagen-banner"><img src="" id="foto-banner"alt="">
            <i class='bx bxs-camera' id="camera-banner"></i>
          </label>
          <input type="file" id="imagen-banner">
        </div>
        <div class="img-avatar">
          <label for="foto"><img class="avatar"  id="avatar" src="" />
            <i class='bx bxs-camera' id="camera"></i>
          </label>
          <input type="file" id="foto">
          <input type="text" placeholder="Escribe tu nombre" class="user-name">
        </div>
      </div>
      <ul class="socials">
        <li>
          <i class='bx bxl-gmail bx-flip-horizontal' style='color:#ff2b2b'></i>
          <a href="#">Mi correo</a>
        </li>
        <li>
          <i class='bx bxl-facebook-circle' style='color:#0000ff'  ></i>
          <a href="#">mi facebook</a>
        </li>
      </ul>
      <div class="about">
        <h3>Acerca de nosotros:</h3>
       <textarea name="descripcin" id="descripcion" cols="30" rows="10" placeholder="Escribe una breve descripcion"></textarea>
        <h3>Acerca de mi: </h3>
        <textarea name="descripcin" id="descripcion" cols="30" rows="10"placeholder="Escribe una breve descripcion"></textarea>
      </div>
      <button class="publicar">Publicar</button>
    </div>
    <script src="../indexJs/perfil_admin.js"></script>
  </body>
</html>
