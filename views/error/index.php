<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Links de CSS -->
  <link rel="stylesheet" href="./public/css/error404.css?v=<?php echo time(); ?>">
  <title>Erro 404</title>
</head>

<body class="body">
  <?php
  // require 'views/header.php' 
  ?>
  <div class="conten">
    <div class="conten__img">
      <img src="./public/images/404.png" alt="Error 404 images">
      <p class="conten__number">
        404
      </p>
    </div>
    <div class="conten__Description">
      <p class="conten__error">
        UPSSSS!!!! Algo salio mal, pagina no encontrada.
      </p>
      <a href="/" class="conten__button">SACAME DE AQUI!.</a>
    </div>
  </div>




  <div id="main">

    <h1 style="color: red;">
      <?php
      // echo $this->mensaje; 
      ?>
    </h1>

  </div>



  <?php require 'views/footer.php' ?>
</body>

</html>