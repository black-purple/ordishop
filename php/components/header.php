<?php 
  // function to get thename of the page dynamically
  function getPageName():string{
    $file = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
    // Get the file name of the current page from the uri
    switch($file){
      case "index.php":
        return "Home";
      case "qsn.php":
        return "Qui sommes nous?";
      case "nos-ord.php":
        return "Nos Ordinateurs";
      case "nos-cof.php":
        return "Nos Coffrets";
      case "nos-fournis.php":
        return "Nos Fournisseurs";
      case "product.php":
        return "Produit";
    }
  }
  
  // function to get the css styles dynamically
  function getCssFile():string{
    // Get the file name of the current page from the uri
    $file = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
    switch($file){
      case "index.php":
        return "home.css";
      case "qsn.php":
        return "qsn.css";
      case "nos-ord.php":
        return "Nos Ordinateurs";
      case "nos-cof.php":
        return "nos-fournis-cof.css";
      case "nos-fournis.php":
        return "nos-fournis-cof.css";
      case "product.php":
        return "product desc.css";
    }    
  }

  function changePaths():string{
    $host = $_SERVER['SERVER_NAME'];
    return $host == "localhost" ? "/ordishop" : "";
  }
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo changePaths();?>/img/favicon.ico" type="image/x-icon">
    <!-- Styles CSS -->
    <link rel="stylesheet" href="<?php echo changePaths();?>/css/footer.css">
    <link rel="stylesheet" href="<?php echo changePaths();?>/css/header-nav.css">
    <link rel="stylesheet" href="<?php echo changePaths();?>/css/<?php echo getCssFile();?>">
    <link rel="stylesheet" href="<?php echo changePaths();?>/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet" />
    <!-- JS scripts -->
    <script src="<?php echo changePaths();?>/js/show_hide_passwd.js" type="text/javascript"></script>
    <!-- JS Imports -->
    <script src="<?php echo changePaths();?>/js/bootstrap.bundle.min.js"></script>
    <!-- jquery script -->
    <script src="<?php echo changePaths();?>/js/jquery-3.6.0.min.js"></script>
    <!-- CDN -->
    <script src="https://kit.fontawesome.com/23ca7ab081.js" crossorigin="anonymous"></script>
    <!--CDN ICONS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>OrdiShop | <?php echo getPageName();?></title>
</head>

<body class="d-flex flex-column">

  <!-- Google traduction script -- debut  -->
    <div id="google_translate_element"></div>

    <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'fr'
        }, 'google_translate_element');
    }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    <!-- Google traduction script -- fin  -->
    <!-- Header of the page (nav, search, login, language, cart) -->
    <header>

        <div class="navbar navbar-expand-lg navbar-light">
            <div id="google_translate_element"></div>
            <div class="container">

                <a class="navbar-brand d-none d-sm-block flex-shrink-0" href="#">
                    <img src="<?php echo changePaths();?>/img/os-logo.png" class="img-fluid" width="130">
                </a>

                <a class="navbar-brand d-sm-none flex-shrink-0 me-2" href="#">
                    <img src="<?php echo changePaths();?>/img/os-sm-logo.png" class="img-fluid" width="50"></a>

                <button class="navbar-toggler btn-close-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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

                            <a class="nav-link dropdown-toggle text text-white" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="<?php echo changePaths();?>/img/langue.png" width="35" alt="">
                            </a>

                            <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#"><img
                                            src="<?php echo changePaths();?>/img/la-france.png" width="20" alt="">
                                        Français</a></li>
                                <li><a class="dropdown-item" href="#"><img
                                            src="<?php echo changePaths();?>/img/maroc.png" width="20" alt="">
                                        العربية</a></li>
                            </ul>
                        </li>
                        <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-user"></i></div>

                        <li class="nav-item dropdown">
                            <i class="bi bi-person-fill"></i> se conncter
                            </a>



                        <li class="nav-item dropdown">

                            <a class="nav-link text-white dropdown-toggle" href="" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">
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