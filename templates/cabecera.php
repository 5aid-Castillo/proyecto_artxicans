<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0"
    />
    <!-- Para el crawler del navegador-->
    <meta name="robots" content="index.follow" />
    <meta name="keyword" content="artesanias, handicraft, mexican, mexico," />
    <meta name="description" content="Artesanias Mexicanas" />
    <!-- Styles -->
    <link
      rel="stylesheet"
      type="text/css"
      href="node_modules/swiper/swiper-bundle.css"
    />
    <link rel="stylesheet" href="./styles/bootstrap-5.2.3-dist/css/bootstrap.min.css">  
    <link rel="stylesheet" href="./styles/home/products.css?v=2">
    <link rel="shortcut icon" href="assets/logo/a.png" />
    <link rel="stylesheet" href="./styles/home/carousel.css?v=2" />
    <link rel="stylesheet" href="./styles//home/searchbox.css?v=2" />
    <link rel="stylesheet" href="./styles/footer/footer.css?v=2" />
    <link rel="stylesheet" href="./styles/home/main.css?v=2" />
    <link rel="stylesheet" href="./styles/header/header.css?v=2" />
    <link rel="stylesheet" href="index.css?v=2" />
    <!-- GoogleIcons -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    <title>Artxicans</title>
  </head>
  <body>
    <!-- Header and Navbar -->
    <header class="header">
      <nav class="navigation">
        <div class="logo">
          <a href="index.html"><!-- <img src="./assets/imgimg.jpg" /> -->Artxicans</a>
        </div>
        <button class="burger-btn">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="30"
            height="30"
            viewBox="0 0 24 24"
          >
            <path d="M4 6H20V8H4zM4 11H20V13H4zM4 16H20V18H4z" />
          </svg>
          <svg
            class="none"
            xmlns="http://www.w3.org/2000/svg"
            width="30"
            height="30"
            viewBox="0 0 24 24"
          >
            <path
              d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z"
            />
          </svg>
        </button>
        <div class="navbar" id="navbar">
          <ul class="navList">
            <li class="navItem"><a href="">Inicio</a></li>
            <li class="navItem dropdown">
              <a
                class="dropdown-toggle"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                href=""
                >Categorias</a
              >
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Alebrijes</a></li>
                <li><a class="dropdown-item" href="#">Arte Huichol</a></li>
                <li><a class="dropdown-item" href="#">Juguetes</a></li>
                <li><a class="dropdown-item" href="#">Joyeria</a></li>
                <li><a class="dropdown-item" href="#">Ropa</a></li>
                <li><a class="dropdown-item" href="#">Rebozos</a></li>
                <li><a class="dropdown-item" href="#">Sombreros</a></li>
                <li><a class="dropdown-item" href="#">Zapatos</a></li>
                <li><a class="dropdown-item" href="#">Otros...</a></li>
                
              </ul>
            </li>
            <li class="navItem"><a href="">Mis Compras</a></li>
            <li class="navItem"><a href="./pages/sell.php">Vender</a></li>
            <li class="navItem"><a href="./pages/help.html">Ayuda</a></li>
            <div class="headerBtn">
              <!-- <a href="#login"> -->
              <button class="loginBtn" onclick="location.href='pages/login.php'">
                <a>Ingresa</a>
              </button>
              <!-- </a> -->
              <button class="btn-header2 signBtn" onclick="location.href='pages/signup.php'">
                <a>Regístrate</a>
              </button>
            </div>
          </ul>
        </div>
      </nav>
    </header>