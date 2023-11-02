<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Pájaros</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3  border-bottom">
        <div class="col-md-1 mb-2 mb-md-0">
          <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
            <img src="images/logo.png" height="50" alt="logo">
          </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link text-dark px-2 link-secondary">Home</a></li>
      </ul>


        <div class="col-md-3 text-end">
          <?php
          session_start(); 
          // $_SESSION['usuario'] = 'antonio';
          unset($_SESSION['usuario']);

          if(isset($_SESSION['usuario'])){
              echo ' 
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                ' . $_SESSION['usuario'] . '
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Pedidos</a></li>
                <li><a class="dropdown-item" href="#">Reclamos</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Profile Settings</a></li>
              </ul>
              ';
          } else {
              echo '<button type="button" class="btn btn-outline-dark me-2">Login</button>';
              echo '<button type="button" class="btn btn-dark">Sign-up</button>';
          }
          ?>
        </div>
  </header>
  <main>
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%"  src="images/banner-01.jpg" alt="banner 02">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Los mejores sonidos de pajaro</h1>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img class="bd-placeholder-img" width="100%"  src="images/banner-02.jpg" alt="banner 02">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Registrate en nuestro programa de recompensas</h1>
            <p><a class="btn btn-lg btn-success" href="#">Sign Up</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img class="bd-placeholder-img" width="100%"  src="images/banner-03.jpg" alt="banner 02">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>2x1</h1>
            <p>Sujeto a restricciones</p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="cards-container">
    <div class="product-card">
      <img src="https://www.lavanguardia.com/files/image_948_465/uploads/2019/09/20/5fa583952a432.png" alt="">
      <div class="product-info">
        <div>
          <p>$120,00</p>
          <p>Bird</p>
        </div>
        <figure>
          <img src="images/bt_add_to_cart.svg" alt="">
        </figure>
      </div>
    </div>

    <div class="product-card">
      <img src="https://www.lavanguardia.com/files/image_948_465/uploads/2019/09/20/5fa583952a432.png" alt="">
      <div class="product-info">
        <div>
          <p>$120,00</p>
          <p>Bird</p>
        </div>
        <figure>
          <img src="images/bt_add_to_cart.svg" alt="">
        </figure>
      </div>
    </div>

    <div class="product-card">
      <img src="https://www.lavanguardia.com/files/image_948_465/uploads/2019/09/20/5fa583952a432.png" alt="">
      <div class="product-info">
        <div>
          <p>$120,00</p>
          <p>Bird</p>
        </div>
        <form action="index.php" method="post">
          <figure>
            <img src="images/bt_add_to_cart.svg" alt="" name="boton_comprar">
          </figure>
        </form>
      </div>
    </div>
  </main>
    

    <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom border-top pb-3 pt-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
    </ul>
    <p class="text-center text-body-secondary ">© 2023 Bird Sound</p>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
