<?php include("./php/components/header.php");?>
<!-- Definition and connexion section -->
<section id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
      aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/pub.jpg" height="500px" class="d-block w-100" alt="Impossible d'afficher l'image">
      <div class="carousel-caption d-none d-md-block">
        <h5>Bienvenue a ordishop</h5>
        <p>Votre portail pour acheterdes ordnateurs de haute gamme avec des prix convenient pour chaue budget</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src=",/img/pub.jpg" height="500px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/pub.jpg" height="500px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</section>



<!-- Comment ça fonctionne? #mab -->

<section class="container">
  <article class="row fonctionne">

    <div class="d-flex pt-1 border-bottom pb-4 mb-4  pb-4 mb-4">
      <h1 class=" mb-0 pt-3 me-2">Comment ça fonctionne ?</h1>
    </div>

    <div class=" col d-flex align-items-center mx-auto py-3 px-3 border-end">
      <div class="display-3 fw-normal me-4 ">01</div>
      <div class="ps-2">
        <i class="bi bi-shield-check "></i>
        <p class="mb-3 pt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
    </div>

    <div class=" col d-flex align-items-center mx-auto py-3 px-3 border-end">
      <div class="display-3 fw-normal me-4 ">02</div>
      <div class="ps-2">
        <i class="bi bi-truck "></i>
        <p class="mb-3 pt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
    </div>

    <div class=" col d-flex align-items-center mx-auto py-3 px-3 border-end">
      <div class="display-3 fw-normal  me-4 ">03</div>
      <div class="ps-2">
        <i class="bi bi-chat-left-dots "></i>
        <p class="mb-3 pt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
    </div>

    <div class=" col d-flex align-items-center mx-auto py-3 px-3 ">
      <div class="display-3 fw-normal me-4 ">04</div>
      <div class="ps-2">
        <i class="bi bi-star "></i>
        <p class="mb-3 pt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
    </div>
  </article>

  <!--*** sale *** -->
  <article class="row sale owl-carousel">

    <div class=" col-md-3 order-md-2">
      <div class="text-white text-center mb-5 mt-5  cl">
        <h1>Sale</h1>
        <h3>Termine dans: </h3>
        <h3>02j : 21h : 45m</h3>
        <a href="#" class="btn btn-light lg">voire plus</a>
      </div>
    </div>

    <div class="col-md-3">

      <div class="card mb-5 mt-5 p-3">
        <span class="badge ">Sale</span>
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
    </div>

    <div class="col-md-3">
      <div class="card mb-5 mt-5 p-3">
        <span class="badge ">Sale</span>
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
    </div>

    <div class="col-md-3">
      <div class="card mb-5 mt-5 p-3">
        <span class="badge ">Sale</span>
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
    </div>

  </article>

  <!-- SHOP NEW -->
  <article class="container pb-4 mb-md-3">
    <div class="row">
      <div class="col-md-6 mb-4 ">
        <div class="bgshop">
          <div class="d-sm-flex justify-content-between align-items-center  overflow-hidden rounded-3">
            <div class="py-4 my-2 my-md-0 py-md-5 px-4 ms-md-3 text-center text-sm-start ">
              <h3 class="mb-4">MSI GF63 Thin 11SC-027XFR :</h3>
              <a class="btn btn-outline-white" href="#">Shop Now</a>
            </div>
            <img src="/img/computers/pc.mci.png" width="300"
              class="d-block ms-auto justify-content-between align-items-center " alt="">
          </div>
        </div>
      </div>

      <div class="col-md-6 mb-4 ">
        <div class="bgshop">
          <div class="d-sm-flex justify-content-between align-items-center  overflow-hidden rounded-3">
            <div class="py-4 my-2 my-md-0 py-md-5 px-4 ms-md-3 text-center text-sm-start ">
              <h3 class="mb-4">Razer Blade Gaming Laptop :</h3>
              <a class="btn btn-outline-white" href="#">Shop Now</a>
            </div>
            <img src="/img/computers/pc2.png" width="300" class="d-block ms-auto" alt="">

          </div>
        </div>
      </div>





  </article>

  <article class="nouveautes">
    <!-- liste de Les nouveautés -->
    <div class="d-flex justify-content-between  pt-1 border-bottom pb-4 mb-4">
      <h1 class=" pt-3 me-2"> Les nouveautés</h1>
    </div>
    <!-- grid product -->
    <div class="row">
      <div class="col-md-3">
        <div class="card mb-5 p-3">
          <span class="badge ">Sale</span>
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
          <span class="badge ">Sale</span>
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
          <span class="badge ">Sale</span>
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
          <span class="badge ">Sale</span>
          <img src="../img/dell-removebg-preview.png" class="card-img-top " alt="">
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
        <a class="btn btn-outline-accent" href="/html/nos-ord.html">VOIR PLUS ▶</a>
      </div>
    </div>
  </article>

  <!-- Nos fourmisseurs -->
  <article class="fourni">

    <div class="d-flex pt-1 border-bottom pb-4 mb-4">
      <h1 class=" mb-0 pt-3 me-2"> Nos fournisseurs</h1>
    </div>
    <div class=" row">

      <div class="col-md-3 col-sm-4 col-6">
        <div class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#">
          <img class="d-block mx-auto" src="/img/logo/asus.webp" style="width: 150px;" alt="">
        </div>
      </div>

      <div class="col-md-3 col-sm-4 col-6">
        <div class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter">
          <img class="d-block mx-auto" src="/img/logo/lenovo.webp" style="width: 150px;" alt="">
        </div>
      </div>

      <div class="col-md-3 col-sm-4 col-6">
        <div class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter">
          <img class="d-block mx-auto" src="/img/logo/msi.webp" style="width: 150px;" alt="">
        </div>
      </div>

      <div class="col-md-3 col-sm-4 col-6">
        <div class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter">
          <img class="d-block mx-auto" src="/img/logo/samsung.webp" style="width: 150px;" alt="">
        </div>
      </div>

    </div>
    <div class="text-center mt-4 vp">
      <a class="btn btn-outline-accent" href="/html/nos-fournis.html">VOIR TOUT ▶</a>
    </div>
    </div>
  </article>

  <!-- Nos coffrets -->
  <article class="coffrets">
    <div class="rounded-3  mt-4 text-center text-xl-start coff-bg">
      <div class="d-xl-flex justify-content-between align-items-center px-sm-5 mx-auto" style="max-width: 1226px;">
        <div class="py-5 me-xl-4 mx-auto mx-xl-0" style="max-width: 490px;">
          <img src="./img/os-logo.png" class="mb-4" width="40%" alt="">
          <h1 class="text-light">Nos coffrets</h1>
          <span class="border-gradient"></span>
          <p class="text-light pb-4 bg-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste eius
            eveniet excepturi, </p>

          <div>
            <a class="btn" href="./pages/nos-cof.html">VOIR PLUS ▶</a>
          </div>
        </div>

        <div><img src="./img/forni.png" alt="Image"></div>

      </div>
    </div>

  </article>

</section>
<div class="text-center mt-4 vp">
  <img src="./img/LOGO ORDISHOP.png" width="20%" alt="logo">
</div>

<!-- Footer (quick links, language, login) -->
<?php include("./php/components/footer.php");?>