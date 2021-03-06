<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!--link style css-->
        <link rel="stylesheet" href="navbar.css">    
        <!--link bootstrap-->
         <link rel="stylesheet" href="../css/bootstrap.min.css">
         <!--CDN ICONS-->
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons css">
         <!-- JavaScript Bundle with Popper -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header>
     
        <div class="navbar navbar-expand-lg navbar-light">
          <div class="container">
           <!-- logo os -->
            <a class="navbar-brand d-none d-sm-block flex-shrink-0 " href="#">
              <img src="../img/os-logo.png" class="img-fluid" width="130">
            </a>
           <!-- logo sm -->
            <a class="navbar-brand d-sm-none  flex-shrink-0 " href="#">
              <img src="../img/os-sm-logo.png" class="img-fluid" width="50"></a>

              
      
            <button class="navbar-toggler btn-close-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link dropdown-toggle text text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-translate"></i>
                    </a>
                      <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                         <li><a class="dropdown-item" href="#">
                          <img src="img/la-france.png" width="20" alt=""> Fran??ais</a></li>
                         <li><a class="dropdown-item" href="#">
                          <img src="img/maroc.png" width="20" alt=""> ??????????????</a>
                        </li>
                      </ul>
                </li>

       
  
         <li class="nav-item dropdown"> <a href="#" class="nav-link text-white"> <i class="bi bi-person-fill"></i> se conncter </a></li>
            
        <li class="nav-item">
  
            <a class="nav-link text-white " href="" id="dropdownMenuLink" >
             <span class="icon"> <i class="bi bi-bag-fill"></i></span> Panier 
             </a>
               </li>
              </ul>
  
              </div>
           </div>
        </div>
      
      </header>
  
      <nav class="navbar navbar-expand-lg" >
  
        <div class="collapse navbar-collapse p-1" id="navbarSupportedContent" >
  
        <ul class="navbar-nav container  justify-content-center">
        <li class="nav-item"><a class="nav-link text-white " href="../index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="../pages/nos-ord.php">Nos Ordinateurs</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="../pages/nos-cof.php">Nos Coffrets</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="../pages/nos-fournis.php">Nos Fournisseurs</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="../pages/qsn.php">Qui Sommes Nous</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="../pages/blog.php">Blog</a></li>
        </ul>
        
       </div>
        
      </nav>
    
</body>
</html>