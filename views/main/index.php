<!DOCTYPE html>
<html lang="es">
<?php
require_once 'views/head.php';
?>

<body>
  <!-- Se genera la carga del MENU -->
  <!-- Se carga Preloader -->
  <?php
  require 'views/header.php';
  require 'views/preloader.php';
  ?>

  <div class="hero"> <!--Slider de Imagnes  -->
    <div class="slider">
      <div class="container">

        <div class="slide active">
          <div class="info">
            <div class="info-content">
              <h3 class="top-down">
                MEDICINA GENERAL
              </h3>
              <h2 class="top-down trans-delay-0-2">
                CURACIONES
              </h2>
              <p class="top-down trans-delay-0-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dolor commodi dignissimos culpa, eaque eos necessitatibus possimus veniam, cupiditate rerum deleniti? Libero, ducimus error? Beatae velit dolore sint explicabo! Fugit.
              </p>
              <div class="top-down trans-delay-0-6">
                <button class="btn-flat btn-hover" role="link" onclick="window.location='./products.php'">
                  <span>VER MAS</span>
                </button>
              </div>
            </div>
          </div>
          <div class="img top-down">
            <img src="./public/images/quiropodia-1200x1067.jpeg" alt=" DerechosReservados_PIXABAY_19 store-984393_1920Imagen de Free-Photos en Pixabay.jpg">
          </div>
        </div>

        <div class="slide">
          <div class="info">
            <div class="info-content">
              <h3 class="top-down">
                TERAPIA PARA PIES
              </h3>
              <h2 class="top-down trans-delay-0-2">
                TRATAMIENTOS
              </h2>
              <p class="top-down trans-delay-0-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. A optio, voluptatum aperiam nobis quis maxime corporis porro alias soluta sunt quae consectetur aliquid blanditiis perspiciatis labore cumque, ullam, quam eligendi!
              </p>
              <div class="top-down trans-delay-0-6">
                <button class="btn-flat btn-hover" role="link" onclick="window.location='./products.php'">
                  <span>VER MAS</span>
                </button>
              </div>
            </div>
          </div>
          <div class="img right-left">
            <img src="./public/images/cuidados-pies-sanos-bonitos_d1b3a791_1200x1200.jpg" alt="DerechosReservados_PIXABAY_3_Imagen_de_Anastasia_Gepp_en_Pixabay.jpg">
          </div>
        </div>
        <div class="slide">
          <div class="info">
            <div class="info-content">
              <h3 class="top-down">
                ANALISIS CLINICOS
              </h3>
              <h2 class="top-down trans-delay-0-2">
                BH-QS-PERFILES
              </h2>
              <p class="top-down trans-delay-0-4">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo aut fugiat, libero magnam nemo inventore in tempora beatae officiis temporibus odit deserunt molestiae amet quam, asperiores, iure recusandae nulla labore!
              </p>
              <div class="top-down trans-delay-0-6">
                <button class="btn-flat btn-hover" role="link" onclick="window.location='./products.php'">
                  <span>VER MAS</span>
                </button>
              </div>
            </div>
          </div>
          <div class="img left-right">
            <img src="./public/images/Laboratorio-01-scaled.jpg" alt="DerechosReservados_PIXABAY_pexels-photomix-company-94843.jpg">
          </div>
        </div>
        <div class="slide">
          <div class="info">
            <div class="info-content">
              <h3 class="top-down">
                DETECCION TEMPRANA.
              </h3>
              <h2 class="top-down trans-delay-0-2">
                PIE DIABETICO
              </h2>
              <p class="top-down trans-delay-0-4">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo aut fugiat, libero magnam nemo inventore in tempora beatae officiis temporibus odit deserunt molestiae amet quam, asperiores, iure recusandae nulla labore!
              </p>
              <div class="top-down trans-delay-0-6">
                <button class="btn-flat btn-hover" role="link" onclick="window.location='./products.php'">
                  <span>VER MAS</span>
                </button>
              </div>
            </div>
          </div>
          <div class="img left-right">
            <img src="./public/images/71aGA7f5n+L.jpg" alt="DerechosReservados_PIXABAY_pexels-photomix-company-94843.jpg">
          </div>
        </div>
      </div>
      <button class="slide-controll slide-next">
        <i class='bx bxs-chevron-right'></i>
      </button>
      <button class="slide-controll slide-prev">
        <i class='bx bxs-chevron-left'></i>
      </button>
    </div>
  </div>

  <div class="promotion"><!--//¡SOLO EN SUCURSAL!  -->
    <div class="content"> <!-- Este es el texto animado  -->
      <div class="content__container">
        <p class="content__container__text">
          SOLO,
        </p>

        <ul class="content__container__list">
          <li class="content__container__list__item">DESCUENTOS !</li>
          <li class="content__container__list__item">NUEVOS !</li>
          <li class="content__container__list__item">ULTIMOS !</li>
          <li class="content__container__list__item">APROVECHA !</li>
        </ul>
      </div>
    </div>
    <!-- <div class="section-header">
      <h2>¡SOLO EN SUCURSAL!</h2>
    </div> -->
    <div class="row">
      <div class="col-4 col-md-12 col-sm-12">
        <div class="promotion-box">
          <div class="text">
            <h3>CORTAUÑAS PROFESIONAL</h3>
            <button class="btn-flat btn-hover" role="link" onclick="window.location='./product-detail.php'"><span>MAS DETALLES</span></button>
          </div>
          <img src="./public/images/51kcQMBE8cL-removebg-preview.png" alt="Insulina Dix">
        </div>
      </div>
      <div class="col-4 col-md-12 col-sm-12">
        <div class="promotion-box">
          <div class="text">
            <h3>ESTUDIOS LABORATORIO</h3>
            <button class="btn-flat btn-hover" role="link" onclick="window.location='./product-detail.php'"><span>MAS DETALLES</span></button>
          </div>
          <img src="./public/images/kisspng-test-tube-blood-test-chemistry-blood-test-5aa250afe70ba3.8078162915205869279464-removebg-preview.png" alt="Estudios laboratorios">
        </div>
      </div>
      <div class="col-4 col-md-12 col-sm-12">
        <div class="promotion-box">
          <div class="text">
            <h3>CEPILLO PROFESIONAL</h3>
            <button class="btn-flat btn-hover" role="link" onclick="window.location='./product-detail.php'"><span>MAS DETALLES</span></button>
          </div>
          <img src="./public/images/61ykX4OXf4L._AC_UF1000_1000_QL80_-removebg-preview.png" alt="">
        </div>
      </div>
      <div class="col-4 col-md-12 col-sm-12">
        <div class="promotion-box">
          <div class="text">
            <h3>BISTURI QUIRURGICO</h3>
            <button class="btn-flat btn-hover" role="link" onclick="window.location='./product-detail.php'"><span>MAS DETALLES</span></button>
          </div>
          <img src="./public/images/41oD9LjRtxL._AC_UF1000_1000_QL80_-removebg-preview.png">
        </div>
      </div>
      <div class="col-4 col-md-12 col-sm-12">
        <div class="promotion-box">
          <div class="text">
            <h3>LIJA DE PIES PROFESIONAL</h3>
            <button class="btn-flat btn-hover" role="link" onclick="window.location='./product-detail.php'"><span>MAS DETALLES</span></button>
          </div>
          <img src="./public/images/Lija-Pie-Madera-Popular-Pomania-removebg-preview.png" alt="Estudios laboratorios">
        </div>
      </div>
      <div class="col-4 col-md-12 col-sm-12">
        <div class="promotion-box">
          <div class="text">
            <h3>MASAJEADOR PORTATIL</h3>
            <button class="btn-flat btn-hover" role="link" onclick="window.location='./product-detail.php'"><span>MAS DETALLES</span></button>
          </div>
          <img src="./public/images/gsc_121582445_3098263_1-removebg-preview.png" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="section"> <!-- //PROMOCIONES SKU'S -->
    <div class="container">
      <div class="content content2"> <!-- Este es el texto animado  -->
        <div class="content__container">
          <p class="content__container__text">
            SOLO,
          </p>

          <ul class="content__container__list">
            <li class="content__container__list__item">ULTIMOS !</li>
            <li class="content__container__list__item">OFERTAS !</li>
            <li class="content__container__list__item">DESCUENTOS !</li>
            <li class="content__container__list__item">APROVECHA !</li>
          </ul>
        </div>
      </div>
      <!-- <div class="section-header">
        <h2>PROMOCIONES SKU'S</h2>
      </div> -->
      <div class="row" id="latest-products">
        <div class="col-3 col-md-6 col-sm-12">
          <div class="product-card">
            <div class="product-card-img">
              <img src="./public/images/51DypToATYL._AC_UF1000_1000_QL80_-removebg-preview.png" alt="logotipo diabetex">
              <img src="./public/images/images.png" alt="pomada Ting p/pies">
            </div>
            <div class="product-card-info">
              <div class="product-btn">
                <button class="btn-flat btn-hover btn-shop-now" onclick="window.location='/product-detail.php'">COMPRAR</button>
                <button class="btn-flat btn-hover btn-cart-add">
                  <i class='bx bxs-cart-add'></i>
                </button>
                <button class="btn-flat btn-hover btn-cart-add">
                  <i class='bx bxs-heart'></i>
                </button>
              </div>
              <div class="product-card-name">
                POMADA TING 180g.
              </div>
              <div class="product-card-price">
                <span><del>$399</del></span>
                <span class="curr-price">$349</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-footer">
        <a href="./products.php" class="btn-flat btn-hover">VER MAS</a>
      </div>
    </div>
  </div>

  <div class="bg-second"><!-- // un ¡SOLO Producto. -->
    <div class="section container">
      <div class="row">
        <div class="col-4 col-md-4">
          <div class="sp-item-img">
            <img src="./public/images/980010697s-removebg-preview.png" alt="">
          </div>
        </div>
        <div class="col-7 col-md-8">
          <div class="sp-item-info">
            <div class="sp-item-name">FLANAX BAYER MEDIC.</div>
            <p class="sp-item-description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore dignissimos itaque et eaque quod harum vero autem? Reprehenderit enim non voluptate! Qui provident modi est non eius ratione, debitis iure.
            </p>
            <button class="btn-flat btn-hover" role="link" onclick="window.location='./product-detail.php'">COMPRAR AHORA</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section"><!-- //MAS VENDIDO -->
    <div class="container">
      <div class="content content2"> <!-- Este es el texto animado  -->
        <div class="content__container">
          <p class="content__container__text">
            SOLO,
          </p>

          <ul class="content__container__list">
            <li class="content__container__list__item">DESCUENTOS !</li>
            <li class="content__container__list__item">NUEVOS !</li>
            <li class="content__container__list__item">ULTIMOS !</li>
            <li class="content__container__list__item">APROVECHA !</li>
          </ul>
        </div>
      </div>
      <!-- <div class="section-header">
        <h2>MAS VENDIDOS</h2>
      </div> -->
      <div class="row" id="best-products">
        <div class="col-3 col-md-6 col-sm-12">
          <div class="product-card">
            <div class="product-card-img">
              <img src="./public/images/51DypToATYL._AC_UF1000_1000_QL80_-removebg-preview.png" alt="Medicamento Kerflex">
              <img src="./public/images/images.png " alt="Medicamento Kerflex">
            </div>
            <div class="product-card-info">
              <div class="product-btn">
                <a href="./product-detail.php" class="btn-flat btn-hover btn-shop-now">COMPRAR</a>
                <button class="btn-flat btn-hover btn-cart-add">
                  <i class='bx bxs-cart-add'></i>
                </button>
                <button class="btn-flat btn-hover btn-cart-add">
                  <i class='bx bxs-heart'></i>
                </button>
              </div>
              <div class="product-card-name">
                TING POMADA 28G.
              </div>
              <div class="product-card-price">
                <span><del>$310.20</del></span>
                <span class="curr-price">$249.20</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-footer">
        <a href="./products.php" class="btn-flat btn-hover">VER MAS</a>
      </div>
    </div>
  </div>

  <div class="section"> <!-- //BLOG & TIP'S -->
    <div class="container">
      <div class="content content2"> <!-- Este es el texto animado  -->
        <div class="content__container">
          <p class="content__container__text">
            BLOG,
          </p>

          <ul class="content__container__list">
            <li class="content__container__list__item">TIP'S !</li>
            <li class="content__container__list__item">SALUD !</li>
            <li class="content__container__list__item">VIDA !</li>
            <li class="content__container__list__item">BIENESTAR !</li>
          </ul>
        </div>
      </div>
      <!-- <div class="section-header">
        <h2>BLOG & TIP'S </h2>
      </div> -->
      <div class="blog">
        <div class="blog-img">
          <img src="./public/images/N_2016.10_articulo_nutricionydeporte_WEB.jpg" alt="Imagenes de pixabayderechos reservados de la pagina comida-sana-y-ejercicio.jpg">
        </div>
        <div class="blog-info">
          <div class="blog-title">
            USA CALZADO ADECUADO PARA CORRER.
          </div>
          <div class="blog-preview">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat.
          </div>
          <button class="btn-flat btn-hover" role="link" onclick="window.location='blog'">LEER MAS</button>
        </div>
      </div>
      <div class="blog row-revere">
        <div class="blog-img">
          <img src="./public/images/como-desinfectar-los-elementos-de-manicure-y-pedicure.jpg" alt="Imagenes de pixabayderechos reservados de la pagina ARTICULO_NUTRICION_DEPORTE.jpg">
        </div>
        <div class="blog-info">
          <div class="blog-title">
            DESINFECTA UTENCILIOS ANTES DE USARLOS.
          </div>
          <div class="blog-preview">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat.
          </div>
          <button class="btn-flat btn-hover" role="link" onclick="window.location='blog'">LEER MAS</button>
        </div>
      </div>
      <div class="blog">
        <div class="blog-img">
          <img src="./public/images/masaje-pies-bebe.jpg" alt="">
        </div>
        <div class="blog-info">
          <div class="blog-title">
            CUIDA TUS PIES
          </div>
          <div class="blog-preview">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat.
          </div>
          <button class="btn-flat btn-hover" role="link" onclick="window.location='blog'">LEER MAS</button>
        </div>
      </div>
      <div class="section-footer">
        <a href="#" class="btn-flat btn-hover" role="link" onclick="window.location='./blog_tips.php'">VER TODO</a>
      </div>
    </div>
  </div>

  <div class="bg-second"><!-- // Redes Sociles -->
    <div class="container3">
      <input type="checkbox" id="btn-mas">
      <div class="redes">
        <a href="https://es-la.facebook.com/" class="fa fa-facebook" target="_blank"></a>
        <a href="https://www.youtube.com/" class="fa fa-youtube" target="_blank"></a>
        <a href="https://twitter.com/" class="fa fa-twitter" target="_blank"></a>
        <a href="https://www.pinterest.com/" class="fa fa-pinterest" target="_blank"></a>
      </div>
      <div class="btn-mas">
        <label for="btn-mas" class="fa fa-plus"></label>
      </div>
    </div>
  </div>

  <!-- // ChatBox -->
  <?php require_once 'views/chatbot.php' ?>

  <!-- Se genera la carga del FOOTER. -->
  <?php require 'views/footer.php' ?>

  <!-- Se genera la carga de los SCRIPTS. -->
  <?php require 'views/scripts.php' ?>

</body>

</html>