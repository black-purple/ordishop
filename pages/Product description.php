
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!--link style css-->
        <link rel="stylesheet" href="../css/navbar.css">
        <link rel="stylesheet" href="../css/product desc.css">
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/home.css">
        <!--link bootstrap-->
         <link rel="stylesheet" href="../css/bootstrap.min.css">
         <!--CDN ICONS-->
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
         <!-- JavaScript Bundle with Popper -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
         <!-- jquery -->
        <script src="../js/jquery-3.6.0.min.js"></script>
     
</head>
<body>
   <!-- navbar -->
<?php include("../php/navbar.php");?>
    
  
      <section class="container">

        <nav class="m-2" >
          <ol class="breadcrumb">
            <li>
              <a class="text-nowrap nav-link" href="../index.php"><i class="bi bi-house-door"></i> Home</a>
            </li>
            <li class="text-nowrap text-secondary nav-link "> <i class="bi bi-chevron-right"></i></li>
            <li>
              <a href="#" class="nav-link">Product catalog</a>
            </li>
        
          </ol>
        </nav>

      <article class= "shadow rounded-3 Galerie">
   
          <div class="px-4 pt-lg-3 pb-3 mb-5">
  
              <div class="tab-pane fade active show" id="general" role="tabpanel">
                <div class="row">
                  <!-- Galerie de produits-->
                <div class="col-lg-7 pe-lg-0">
                  <div class="Galerie-produits">
                    <div class="produits-mini-img order-sm-1">
                      <img src="../img/computers/pc2.png" alt="produits" class="imgprd" onmouseover="imgPrd(this)">
                      <img src="../img/dell-removebg-preview.png" class="imgprd" alt="produits" onmouseover="imgPrd(this)">
                      <img src="../img/computers/mini.webp" class="imgprd" alt="produits" onmouseover="imgPrd(this)">
                      <img src="../img/computers/pc.mci.png" class="imgprd" alt="produits" onmouseover="imgPrd(this)">
                    </div>

                    <div class="img-container order-sm-2">
                      <img id="imageBox" src="../img/dell-removebg-preview.png" alt="">
                    </div>
                    <!-- ZOOM IMAGE ▣  -->
                       <canvas id="canvas"></canvas>
                  </div>
                </div>
                  <!-- Product details-->
                <div class="col-lg-5 pt-4 pt-lg-0">
                    <div class="product-details ms-auto pb-3">
                      <h1 class="h2">Dell Inspiron 15 5518-035</h1>      
                      <div class="h3 fw-normal text-accent mb-3 me-1 prix">7,039.<small>00 Dhs</small></div>
                      <del class="h5 fw-normal  text-secondary">$9450.25 Dhs</del>
                      <div class="d-flex align-items-center pt-2 pb-4">
                        <select class="form-select me-3" style="width: 5rem;">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                        <button class="btn d-block w-100" type="button">
                          <i class="bi bi-bag-fill"></i> J'ACHÈTE
                        </button>
                      </div>

                      <!--Panneaux de produits--> 

                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                            <i class="bi bi-geo-alt"></i> Choisissez le lieu
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                            <i class="bi bi-truck"></i> Les options d'expédition
                        </button>
                        </li>
                      
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">  

                          <select class="form-select p-2  mt-3">
                          <option value="94">Chaouia-Ouardigha</option>
                          <option value="95"  selected="">Doukkala-Abda</option>
                          <option value="96">Fès-Boulemane</option>
                          <option value="97">Gharb-Chrarda-Béni Hssen</option>
                          <option value="98">Grand Casablanca</option>
                          <option value="99">Guelmim-Es Smara</option>
                          <option value="100">Laâyoune-Boujdour-Sakia el Hamra</option>
                          <option value="102">Marrakech-Tensift-Al Haouz</option>
                          <option value="103">Meknès-Tafilalet</option>
                          <option value="101">Oriental</option>
                          <option value="241">Oued Ed-Dahab-Lagouira</option>
                          <option value="105">Rabat-Salé-Zemmour-Zaër</option>
                          <option value="106">Souss Massa-Draâ</option>
                          <option value="107">Tadla-Azilal</option>
                          <option value="108">Tanger-Tétouan</option>
                          <option value="109">Taza-Al Hoceïma-Taounate</option>
                          </select>
                           
                           <select class="form-select p-2 mt-3">
                                <option value="" disabled="">Sélectionner</option>
                                <option value="350">JAMAATSHAIM</option>
                                <option value="345">JDOUR</option>
                                <option value="349">JNANEBOUIH</option>
                                <option value="2990">Khemis  Zemamra</option>
                                <option value="351">LABKHATI</option>
                                <option value="346">LAKHOUALQA</option>
                                <option value="358">LAMRASLA</option>
                                <option value="354">LAMSABIH</option>
                                <option value="363">MOULAYABDELLAH</option>
                                <option value="386">OUALIDIA</option>
                                <option value="390">OULADHAMDANE</option>
                                <option value="391">OULADSIDIALIBENYOUSSEF</option>
                                <option value="388">OULEDFREJ</option>
                                <option value="109">SAFI</option>
                                <option value="106">SEBT GZOULA</option>
                          </select>
                          
                      </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                          <div class="d-flex justify-content-between border-bottom py-2">
                            <div>
                              <div class="fw-semibold text-dark">Livraison à domicile</div>
                              <div class="fs-sm text-muted">2 - 4 days</div>
                            </div>
                              <div>15.40 Dhs</div>
                         </div>
                         <div class="d-flex justify-content-between border-bottom py-2">
                           <div>
                             <div class="fw-semibold text-dark">Point relais</div>
                             <div class="fs-sm text-muted">4 - 6 days</div>
                           </div>
                           <div>9.49 Dhs</div>
                         </div>
                        </div>
                    
                      </div>
                    
                </div>
            </div>      
      </section>
 <section class="container">
      <div class="row align-items-center py-md-3">
        
          <div class="col-lg-5 col-sm-6 offset-lg-1 order-md-2">
            <img class="d-block rounded-3 img-fluid" src="../img/computers/pc2.png" width="100%" alt="Image"></div>
          <div class="col-lg-4 col-sm-6 offset-lg-1 py-4 order-md-1">
            <h2 class="h3 mb-4 pb-2">Processeur Intel Core i5 Tiger Lake</h2>
            <h6 class="fs-base mb-3">Le Dell Inspiron</h6>
            <p class="fs-sm text-muted pb-2"> 15 5518-035 est un ordinateur portable qui vous propose une dalle LED en résolution Full HD (1920 X 1080) pour une diagonale de 15,6 pouces et un taux de rafraichissement de 60 Hz. Il est animé par un processeur Intel Core i5-11300H de génération Tiger .</p>
            <h6 class="fs-base mb-3">Stockage rapide et une connectique complète</h6>
            <ul class="nav nav-tabs mb-3" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" href="#wash" data-bs-toggle="tab" role="tab">
                <i class="bi bi-device-ssd fs-3"></i>
              </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#bleach" data-bs-toggle="tab" role="tab">
                <i class="bi bi-windows fs-3"></i></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#hand-wash" data-bs-toggle="tab" role="tab">
                <i class="bi bi-usb-symbol fs-3"></i>
                </a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="#ironing" data-bs-toggle="tab" role="tab">
                <i class="bi bi-hdmi fs-3"></i>
              </a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="#dry-clean" data-bs-toggle="tab" role="tab">
                <i class="bi bi-router fs-3"></i>
                </a>
              </li>
            </ul>
            <div class="tab-content text-muted fs-sm">
              <div class="tab-pane fade show active" id="wash" role="tabpanel">Ce PC portable Dell Inspiron 15 5518-035 est équipé d'un SSD de 512 Go</div>
              <div class="tab-pane fade" id="bleach" role="tabpanel">votre système d'exploitation Windows 10 ou de tous vos programmes en quelques secondes seulement</div>
              <div class="tab-pane fade" id="hand-wash" role="tabpanel">riche avec ses 3 ports USB (1 x Type-C, 2 x Type-A)</div>
              <div class="tab-pane fade" id="ironing" role="tabpanel"> un port HDMI pour vos sorties vidéo et enfin un port Jack 3,5mm Stéréo.</div>
              <div class="tab-pane fade" id="dry-clean" role="tabpanel">Pour vous connecter à Internet, vous pourrez compter sur sa connectivité Wifi 6 AX.</div>
            </div>
          </div>
        </div>

        <div class="row align-items-center py-4 py-lg-5">
          <div class="col-lg-5 col-md-6 offset-lg-1">
            <img class="d-block rounded-3 img-fluid" src="../img/dell-removebg-preview.png"  width="100%" alt="Image">
          </div>
         
          <div class="col-lg-4 col-md-6 offset-lg-1 py-4">
            <h2 class="h3 mb-4 pb-2">Connecté directement à votre smartphone</h2>
            <p class="fs-sm text-muted pb-md-2">​ Grâce à l'application Dell Mobile Connect, vous pouvvez accéder à plusieurs appareils sans fléchir en concentration : Dell Mobile Connect couple votre smartphone Android ou iOS avec votre ordinateur portable. Passez des appels, envoyer des SMS, recevez des notifications et même mettre votre smartphone Android en miroir sur votre PC pour interagir avec toutes vos applications préférées. Une connectique complète</p>
          </div>

        </div>
        </section>

<section>
    <!-- reviews -->
      <article class="border-top border-bottom my-lg-3 py-5">
    
        <div class="container pt-md-2" id="reviews">
          <div class="row pb-3">
            <div class="col-lg-4 col-md-5">
              <h2 class="h3 mb-4">74 Reviews</h2>
              <div class="star-rating me-2">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
              </div>
              <span class="d-inline-block align-middle">4.1 Overall rating</span>
              <p class="pt-3 fs-sm text-muted">58 out of 74 (77%)<br>Customers recommended this product</p>
            </div>
            <div class="col-lg-8 col-md-7">
              <div class="d-flex align-items-center mb-2">
                <div class="text-nowrap me-3">
                  <span class="d-inline-block align-middle text-muted ">5</span>
                  <i class="bi bi-star-fill text-muted"></i>
                </div>
                  <div class="w-100">
                    <div class="progress" style="height: 4px;">
                       <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                       </div>
                  </div>
                </div>
                <span class="text-muted ms-3">43</span>
              </div>
              <div class="d-flex align-items-center mb-2">
                <div class="text-nowrap me-3">
                  <span class="d-inline-block align-middle text-muted">4</span>
                  <i class="bi bi-star-fill text-muted"></i>
                </div>
                <div class="w-100">
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar" role="progressbar" style="width: 27%; background-color: #a7e453;" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100">
                 </div>
                  </div>
                </div>
                <span class="text-muted ms-3">16</span>
              </div>
              <div class="d-flex align-items-center mb-2">
                <div class="text-nowrap me-3">
                  <span class="d-inline-block align-middle text-muted">3</span>
                  <i class="bi bi-star-fill text-muted"></i>
                </div>
                <div class="w-100">
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar" role="progressbar" style="width: 17%; background-color: #ffda75;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100">
                  </div>
                  </div>
                </div>
                <span class="text-muted ms-3">9</span>
              </div>
              <div class="d-flex align-items-center mb-2">
                <div class="text-nowrap me-3">
                  <span class="d-inline-block align-middle text-muted">2</span>
                  <i class="bi bi-star-fill text-muted "></i>
                </div>
                <div class="w-100">
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar" role="progressbar" style="width: 9%; background-color: #fea569;" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100">
                    </div>
                  </div>
                </div><span class="text-muted ms-3">4</span>
              </div>
              <div class="d-flex align-items-center">
                <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">1</span>
                  <i class="bi bi-star-fill text-muted"></i>
                </div>
                <div class="w-100">
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 4%;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100">
                  </div>
                  </div>
                </div>
                <span class="text-muted ms-3">2</span>
              </div>
            </div>
          </div>


          <hr class="mt-4 mb-3">

           <!-- Reviews list-->  

          <article class="row pt-4 Reviews">
          
            <div class="col-md-7">
              <div class="d-flex pt-1 border-bottom pb-4 mb-4  pb-4 mb-4">
                <h3 class=" mb-0 pt-3 me-2">Commentaires des clients</h3>
              </div>  

              <!-- Review 1-->

              <div class="product-review pb-4 mb-4 border-bottom">
                <div class="d-flex mb-3">
                  <div class="d-flex align-items-center me-4 pe-2">
                  <img src="../img/LOGO ORDISHOP.png" class="img-fluid rounded-circle" width="50" height="50" alt="img">
                    <div class="ps-3">
                      <h6 class="fs-sm mb-0">Amine mab</h6><span class="fs-ms text-muted">Juin 18, 2022</span>
                    </div>
                  </div>
                </div>
                <p class="fs-md mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="text-nowrap">
                <button class="btn-like" >
                    <span id="icon"><i class="bi bi-hand-thumbs-up fs-4"></i></span>
                    <span id="count">99</span>
                  </button>
            
                  <button class="btn-dislike" >
                  <span id="iconDis"><i class="bi bi-hand-thumbs-down fs-4"></i></i></span>
                    <span id="countDis">29</span>
                  </button>
                </div>
              </div>

              <!-- Review 2-->

              <div class="product-review pb-4 mb-4 border-bottom">
                <div class="d-flex mb-3">
                  <div class="d-flex align-items-center me-4 pe-2">
                  <img src="../img/LOGO ORDISHOP.png" class="img-fluid rounded-circle" width="50" height="50" alt="img">
                    <div class="ps-3">
                      <h6 class="fs-sm mb-0">Amine mab</h6>
                      <span class="fs-ms text-muted">May 17, 2022</span>
                    </div>
                  </div>
                </div>
                <p class="fs-md mb-2">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
              
                <div class="text-nowrap">
                <button class="btn-like" >
                    <span id="icon"><i class="bi bi-hand-thumbs-up fs-4"></i></span>
                    <span id="count">99</span>
                  </button>
            
                  <button class="btn-dislike" >
                  <span id="iconDis"><i class="bi bi-hand-thumbs-down fs-4"></i></i></span>
                    <span id="countDis">29</span>
                  </button>
                </div>
              </div>

              
              <!-- Review 3-->

              <div class="product-review pb-4 mb-4 border-bottom">
                <div class="d-flex mb-3">
                  <div class="d-flex align-items-center me-4 pe-2">
                  <img src="../img/LOGO ORDISHOP.png" class="img-fluid rounded-circle" width="50" height="50" alt="img">
                    <div class="ps-3">
                      <h6 class="fs-sm mb-0">Amine mab</h6>
                      <span class="fs-ms text-muted">May 17, 2022</span>
                    </div>
                  </div>
                </div>
                <p class="fs-md mb-2">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
              
                <div class="text-nowrap">
                <button class="btn-like" >
                    <span id="icon"><i class="bi bi-hand-thumbs-up fs-4"></i></span>
                    <span id="count">99</span>
                  </button>
            
                  <button class="btn-dislike" >
                  <span id="iconDis"><i class="bi bi-hand-thumbs-down fs-4"></i></i></span>
                    <span id="countDis">29</span>
                  </button>
                </div>
              </div>


              
              <!-- Review 4-->

              <div class="product-review pb-4 mb-4 border-bottom">
                <div class="d-flex mb-3">
                  <div class="d-flex align-items-center me-4 pe-2">
                  <img src="../img/LOGO ORDISHOP.png" class="img-fluid rounded-circle" width="50" height="50" alt="img">
                    <div class="ps-3">
                      <h6 class="fs-sm mb-0">Amine mab</h6>
                      <span class="fs-ms text-muted">May 17, 2022</span>
                    </div>
                  </div>
                </div>
                <p class="fs-md mb-2">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
              
                <div class="text-nowrap">
                <button class="btn-like" >
                    <span id="icon"><i class="bi bi-hand-thumbs-up fs-4"></i></span>
                    <span id="count">99</span>
                  </button>
            
                  <button class="btn-dislike" >
                  <span id="iconDis"><i class="bi bi-hand-thumbs-down fs-4"></i></i></span>
                    <span id="countDis">29</span>
                  </button>
                </div>
              </div>


              
              <!-- Review 5-->

              <div class="product-review pb-4 mb-4 border-bottom">
                <div class="d-flex mb-3">
                  <div class="d-flex align-items-center me-4 pe-2">
                  <img src="../img/LOGO ORDISHOP.png" class="img-fluid rounded-circle" width="50" height="50" alt="img">
                    <div class="ps-3">
                      <h6 class="fs-sm mb-0">Amine mab</h6>
                      <span class="fs-ms text-muted">May 17, 2022</span>
                    </div>
                  </div>
                </div>
                <p class="fs-md mb-2">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
              
                <div class="text-nowrap">
                <button class="btn-like" >
                    <span id="icon"><i class="bi bi-hand-thumbs-up fs-4"></i></span>
                    <span id="count">99</span>
                  </button>
            
                  <button class="btn-dislike" >
                  <span id="iconDis"><i class="bi bi-hand-thumbs-down fs-4"></i></i></span>
                    <span id="countDis">29</span>
                  </button>
                </div>
              </div>

                       
              <!-- Review 6-->

              <div class="product-review pb-4 mb-4 border-bottom">
                <div class="d-flex mb-3">
                  <div class="d-flex align-items-center me-4 pe-2">
                  <img src="../img/LOGO ORDISHOP.png" class="img-fluid rounded-circle" width="50" height="50" alt="img">
                    <div class="ps-3">
                      <h6 class="fs-sm mb-0">Amine mab</h6>
                      <span class="fs-ms text-muted">May 17, 2022</span>
                    </div>
                  </div>
                </div>
                <p class="fs-md mb-2">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
              
                <div class="text-nowrap">
                <button class="btn-like" >
                    <span id="icon"><i class="bi bi-hand-thumbs-up fs-4"></i></span>
                    <span id="count">99</span>
                  </button>
            
                  <button class="btn-dislike" >
                  <span id="iconDis"><i class="bi bi-hand-thumbs-down fs-4"></i></i></span>
                    <span id="countDis">29</span>
                  </button>
                </div>
              </div>



              
        
           
              <div class="text-center">
                <button class="btn plus" id="plus" type="button">
                 ↻  Charger plus d'avis
                </button>
              </div>

            </div>

            <!-- Leave review form-->

            <article class="col-md-5 mt-2 pt-4 mt-md-0 pt-md-0 form">
              <div class="bg-light py-grid-gutter px-grid-gutter rounded-3 p-5">
                <h4 class=" pb-2">Écrire une critique</h4>
                <form  method="post" >
                  <div class="mb-3">
                    <label class="form-label" for="review-name">Votre nom
                      <span class="text-danger">*</span>
                    </label>
                    <input class="form-control" type="text" required id="review-name">
         
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="review-email">Votre email<span class="text-danger">*</span></label>
                    <input class="form-control" type="email" required >
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="review-rating">Rating<span class="text-danger">*</span></label>
                    <select class="form-select" required >
                      <option value="">Choose rating</option>
                      <option value="5">5 stars</option>
                      <option value="4">4 stars</option>
                      <option value="3">3 stars</option>
                      <option value="2">2 stars</option>
                      <option value="1">1 star</option>
                    </select>
                  
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="review-text">Commentaire 
                      <span class="text-danger">*</span>
                    </label>
                    <textarea class="form-control" rows="6" required ></textarea>
                    <small class="form-text text-muted">Votre avis doit comporter au moins 50 caractères.</small>
                  </div>
                  <button class="btn d-block w-100" type="submit">Laisser un commentaire</button>
                </form>
              </div>
            </article>
           
          </article>
        </div>
      </article>


<!-- Autres produits -->
<article class="nouveautes container">
    <!-- liste Autres produits -->
    <div class="d-flex justify-content-between  pt-1 border-bottom pb-4 mb-4">
      <h1 class=" pt-3 me-2"> Autres produits</h1>
    </div>
    <!-- grid product -->
    <div class="row">
      <div class="col-md-3">
        <div class="card mb-5 p-3">
          <span class="badge ">En vente</span>
          <img src="../img/dell-removebg-preview.png" class="card-img-top" alt="">
          <div class="card-body">
            <h3 class="card-titel">DELL</h3>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            <div class="product-prixe"><span class="text-accent fs-5 ">4000.<small>99</small> Dhs</span>
              <del class="fs-sm text-muted">5200.<small>00</small> Dhs</del>
            </div>
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn "><i class="bi bi-bag-fill"></i></button>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card mb-5 p-3">
          <span class="badge ">En vente</span>
          <img src="../img/dell-removebg-preview.png" class="card-img-top" alt="">
          <div class="card-body">
            <h3 class="card-titel">DELL</h3>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            <div class="product-prixe"><span class="text-accent fs-5 ">4000.<small>99</small> Dhs</span>
              <del class="fs-sm text-muted">5200.<small>00</small> Dhs</del>
            </div>
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn "><i class="bi bi-bag-fill"></i></button>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card mb-5 p-3">
          <span class="badge ">En vente</span>
          <img src="../img/dell-removebg-preview.png" class="card-img-top img-fluid" alt="">
          <div class="card-body">
            <h3 class="card-titel">DELL</h3>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            <div class="product-prixe"><span class="text-accent fs-5 ">4000.<small>99</small> Dhs</span>
              <del class="fs-sm text-muted">5200.<small>00</small> Dhs</del>
            </div>
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn "><i class="bi bi-bag-fill"></i></button>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card mb-5 p-3">
          <span class="badge ">En vente</span>
          <img src="../img/dell-removebg-preview.png " class="card-img-top img-fluid" alt="">
          <div class="card-body">
            <h3 class="card-titel">DELL</h3>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            <div class="product-prixe"><span class="text-accent fs-5 ">4000.<small>99</small> Dhs</span>
              <del class="fs-sm text-muted">5200.<small>00</small> Dhs</del>
            </div>
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn "><i class="bi bi-bag-fill"></i></button>
          </div>
        </div>
      </div>
      <div class="text-center vp">
        <a class="btn btn-outline-accent" href="./pages/nos-ord.php">VOIR PLUS ▶</a>
      </div>
    </div>
  </article>
          
 
</section>
      <script src="../js/Galerie-prd.js"></script>
    <?php include("../php/components/footer.php");?>
  
 
</body>
</html>
