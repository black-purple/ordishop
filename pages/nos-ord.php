<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <!-- Styles CSS -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet"/>
    <!-- JS scripts -->
    <script src="../js/show_hide_passwd.js" type="text/javascript"></script>
    <!-- JS Imports -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <!-- CDN -->
    <script src="https://kit.fontawesome.com/23ca7ab081.js" crossorigin="anonymous"></script>
    <title>OrdiShop | Nos Ordinateurs</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Header of the page (nav, search, login, language, cart) -->
    <header id="headerTop">
        <div class="navbar navbar-expand-lg d-flex navbar-light justify-content-between">
            <div>
                <a class="navbar-brand mx-5" href="../index.php">
                    <img class="" src="../img/os-logo.webp" alt="Impossible d'afficher le logo">
                    <!-- <img class="d-sm-none" src="../img/os-sm-logo.png" alt="Impossible d'afficher le logo" width="100rem"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
                <form id="search" class="input-group px-5">
                    <input type="search" class="form-control" placeholder="Rechercher dans ORDISHOP">
                    <button class="btn btn-success" type="submit">Rechercher</button>
                </form>

                <!-- cart, login, language area -->            
                <span id="rightArea" class="d-flex mx-5">
                    <!-- Change language -->
                    <div class="dropdown">
                        <i class="mx-1 fa-icon fa-solid fa-language dropdown-toggle" data-bs-toggle="dropdown">&nbsp;</i>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item d-flex justify-content-between" href="#">Francais <i class="flag flag-france"></i></a></li>
                            <li><a class="dropdown-item d-flex justify-content-between" href="#">العربية <i class="flag flag-morocco"></i></a></li>
                            </ul>
                    </div>
                    
                    
                    <!-- Cart -->
                    <i class="mx-1 fa-icon fa-solid fa-bag-shopping position-relative">
                        <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle"></span>
                    </i>
                    
                    <!-- Login/Signup -->
                    <div class="dropdown">
                        <i class="mx-1 fa-icon fa-regular fa-circle-user dropdown-toggle" data-bs-toggle="dropdown">&nbsp;</i>
                        <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#signupModal">Creer un nouveau compte</a></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#LoginModal">Se conncter a votre compte</a></li>
                        <li><a class="dropdown-item" href="../html/espClient.html">Espace Client</a></li>

                        </ul>
                    </div>
                    <!-- Login Modal -->
                    <div class="modal fade" id="LoginModal" tabindex="1" aria-labelledby="LoginModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="LoginModalLabel">Se connecter a ORDISHOP</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form class="was-validated">
                                    <h6>Se connecter a un compte existant</h6>
                                    <div class="form-floating mb-3 mt-3">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                                    <label for="email">Email</label>
                                    </div>
                                    <div class="input-group mt-3 mb-3">
                                        <div class="form-floating form-floating-group flex-grow-1">
                                            <input type="password" class="form-control rounded-0 rounded-start" id="pwd1" placeholder="Enter password" name="pswd" required>
                                            <label for="pwd1">Mot de passe</label>    
                                        </div>                                        
                                        <button type="button" class="btn rounded-end input-group-text shadow-none hideShowPassword" id="" onclick="showPassword(this)"><i class="fa-solid fa-eye"></i></button>
                                    </div>
                                    <input type="checkbox" name="checkbx" id="rememberMe" class="form-check-input mb-4"> <label for="rememberMe"> Se souveir de moi</label><br>
                                    <button type="submit" class="btn btn-outline-success float-end">Se connecter</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Signup Modal -->
                    <div class="modal fade" id="signupModal" tabindex="1" aria-labelledby="signupModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="signupModalLabel">Se connecter a ORDISHOP</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="was-validated">
                                <h6>Creer un nouveau compte</h6>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="nom" placeholder="Entrer nom" name="nom" required>
                                    <label for="name">Nom</label>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="prenom" placeholder="Entrer prenom" name="prenom" required>
                                    <label for="prenom">Prenom</label>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                                    <label for="email">Email</label>
                                </div>
                                <div class="input-group mt-3 mb-3">
                                    <div class="form-floating form-floating-group flex-grow-1">
                                        <input type="password" class="form-control rounded-0 rounded-start" id="pwd1" placeholder="Enter password" name="pswd" required>
                                        <label for="pwd1">Mot de passe</label>    
                                    </div>                                        
                                    <button type="button" class="btn rounded-end input-group-text shadow-none hideShowPassword" id="" onclick="showPassword(this)"><i class="fa-solid fa-eye"></i></button>
                                </div>
                                <div class="input-group mt-3 mb-3">
                                    <div class="form-floating form-floating-group flex-grow-1">
                                        <input type="password" class="form-control rounded-0 rounded-start" id="pwd2" placeholder="Enter password" name="pswd" required>
                                        <label for="pwd2">Confirmer le mot de passe</label>    
                                    </div>                                        
                                    <button type="button" class="btn rounded-end input-group-text shadow-none hideShowPassword" onclick="showPassword(this)"><i class="fa-solid fa-eye"></i></button>
                                </div>
                                <input type="checkbox" id="conditions" class="form-check-input mb-5" required> <label for="conditions"> J'ai lu et j'accepte les <a href="#">conditions d'utilisation</a></label>
                                <button type="submit" class="btn btn-outline-success float-end mt-5">Se connecter</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </span>
            </div>
            </div>


        <!-- nav bar 
        (nav links [
            Home,
            Nos Ordinateurs, 
            Nos Coffrets, 
            Nos Fournisseurs, 
            Qui Sommes Nous, 
            Blog, 
            Espace Client
            ]
        ) -->
    <?php include("./php/components/nav.php");?>


<?php include("./php/components/footer.php");?>