<?php 

  // function to get thename of the page dynamically
  function getPageName():string{
    $file = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
    if ($file == "index.php")return "Home";
    if ($file == "qsn.php")return "Qui sommes nous?";
    if ($file == "nos-ord.php")return "Nos Ordinateurs";
    if ($file == "nos-cof.php")return "Nos Coffrets";
    if ($file == "nos-fournis.php")return "Nos Fournisseurs";
    if ($file == "product.php")return "Product";
    if ($file == "blog.php")return "Blog";
  }


  // fucntion to get the css styles dynamically
  function getCssFile(){
    $file = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
    if ($file == "index.php")return "home.css";
    if ($file == "qsn.php")return "";
    if ($file == "nos-ord.php")return "Nos Ordinateurs";
    if ($file == "nos-cof.php" || "nos-fournis.php")return "nos-fournis-cof.css";
    if ($file == "product.php")return "product desc.css";
  }
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
  <!-- Styles CSS -->
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/<?php echo getCssFile();?>">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet" />
  <!-- JS scripts -->
  <script src="./js/show_hide_passwd.js" type="text/javascript"></script>
  <!-- JS Imports -->
  <script src="./js/bootstrap.bundle.min.js"></script>
  <!-- jquery script -->
  <script src="./js/jquery-3.6.0.min.js"></script>
  <!-- CDN -->
  <script src="https://kit.fontawesome.com/23ca7ab081.js" crossorigin="anonymous"></script>
  <!--CDN ICONS-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <title>OrdiShop | <?php echo getPageName();?></title>
</head>

<body class="d-flex flex-column min-vh-100">
  <!-- Header of the page (nav, search, login, language, cart) -->


  <header>

    <div class="navbar navbar-expand-lg navbar-light">
      <div class="container">

        <a class="navbar-brand d-none d-sm-block flex-shrink-0" href="#">
          <img src="img/os-logo.png" class="img-fluid" width="130">
        </a>

        <a class="navbar-brand d-sm-none flex-shrink-0 me-2" href="#">
          <img src="img/logo ordishop2.png" class="img-fluid" width="50"></a>

        <button class="navbar-toggler btn-close-white" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">


          <div class="input-group d-none d-lg-flex">
            <input class="form-control" type="text" placeholder="Search for products">
            <button class="btn">RECHERCHER</button>
          </div>

          <div class="input-group d-lg-none w-100 my-3">
            <input class="form-control rounded-start" type="text" placeholder="Search for products">
            <button class="btn text-light ">RECHERCHER</button>
          </div>


          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item dropdown">

              <a class="nav-link dropdown-toggle text text-white" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img src="img/langue.png" width="35" alt="">
              </a>

              <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#"><img src="img/la-france.png" width="20" alt=""> Français</a></li>
                <li><a class="dropdown-item" href="#"><img src="img/maroc.png" width="20" alt=""> العربية</a></li>
              </ul>
            </li>
            <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-user"></i></div>

            <li class="nav-item dropdown">
              <i class="bi bi-person-fill"></i> se conncter
              </a>



            <li class="nav-item dropdown">

              <a class="nav-link text-white dropdown-toggle" href="" id="dropdownMenuLink" data-bs-toggle="dropdown"
                aria-expanded="false">
                <span class="n-label">4</span>
                <span class="icon"> <i class="bi bi-bag-fill"></i></span> Panier
              </a>


              <ul class="dropdown-menu Panier-menu" aria-labelledby="dropdownMenuLink">

                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>


              </ul>


            </li>
          </ul>

        </div>
      </div>
    </div>

  </header>
  <?php include("./php/components/nav.php");?>