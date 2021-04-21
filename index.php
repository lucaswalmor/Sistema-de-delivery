<?php 

include_once("cabecalho.php"); 
include_once("conexao.php"); 

// Verificar se existe usuario administrado, caso nao exista, criar.
$senha = '123';
$res_usuarios = $pdo->query("SELECT * FROM usuarios WHERE nivel = 'Admin'");
$dados_usuarios = $res_usuarios->fetchAll(PDO::FETCH_ASSOC);
$total_usuarios = count($dados_usuarios);

if($total_usuarios == 0){
  $res_insert = $pdo->query("INSERT INTO usuarios (nome, cpf, telefone, usuario, senha, nivel) VALUES ('Administrador', '000.000.000-00', '00000-0000', '$email_adm', '$senha', 'Admin')");
} 
?>

    <!-- Swiper-->
    <section class="section swiper-container swiper-slider swiper-slider-modern" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="true" data-slide-effect="fade">
      <div class="swiper-wrapper text-left">
        <div class="swiper-slide context-dark" data-slide-bg="images/banner1.jpg">
          <div class="swiper-slide-caption">
            <div class="container">
              <div class="row justify-content-center justify-content-xxl-start">
                <div class="col-md-10 col-xxl-6">
                  <div class="slider-modern-box">
                    <h1 class="slider-modern-title"><span data-caption-animate="slideInDown" data-caption-delay="0">Burger Freitas</span></h1>
                    <p data-caption-animate="fadeInRight" data-caption-delay="400">Venha conhecer nossos hamburguer artesanais.</p>
                    <div class="oh button-wrap"><a class="button button-primary button-ujarak" href="about-us.html" data-caption-animate="slideInLeft" data-caption-delay="400">Veja Mais</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide" data-slide-bg="images/banner2.jpg">
          <div class="swiper-slide-caption">
            <div class="container">
              <div class="row justify-content-center justify-content-xxl-start">
                <div class="col-md-10 col-xxl-6">
                  <div class="slider-modern-box">
                    <h1 class="slider-modern-title"><span data-caption-animate="slideInDown" data-caption-delay="0">Lorem, ipsum dolor.</span></h1>
                    <p data-caption-animate="fadeInRight" data-caption-delay="400">Lorem ipsum dolor sit amet.</p>
                    <div class="oh button-wrap"><a class="button button-primary button-ujarak" href="about-us.html" data-caption-animate="slideInUp" data-caption-delay="400">Veja Mais</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Swiper Navigation-->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <!-- Swiper Pagination-->
      <div class="swiper-pagination swiper-pagination-style-2"></div>
    </section>

    <!-- Icons Ruby-->
    <section class="section section-md bg-default section-top-image">
      <div class="container">
        <div class="row row-30 justify-content-center">
          <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="0s">
            <article class="box-icon-ruby">
              <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
                <div class="unit-left">
                  <div class="box-icon-ruby-icon linearicons-smile"></div>
                </div>
                <div class="unit-body">
                  <h4 class="box-icon-ruby-title"><a href="#">Lanches</a></h4>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".1s">
            <article class="box-icon-ruby">
              <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
                <div class="unit-left">
                  <div class="box-icon-ruby-icon linearicons-pie-chart"></div>
                </div>
                <div class="unit-body">
                  <h4 class="box-icon-ruby-title"><a href="#">Massas e Pizzas</a></h4>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".2s">
            <article class="box-icon-ruby">
              <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
                <div class="unit-left">
                  <div class="box-icon-ruby-icon linearicons-coffee-cup"></div>
                </div>
                <div class="unit-body">
                  <h4 class="box-icon-ruby-title"><a href="#">Bebidas</a></h4>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <!-- Trending products-->
    <section class="section section-md bg-default">
      <div class="container">
        <div class="row row-40 justify-content-center">
          <div class="col-sm-8 col-md-7 col-lg-6 wow fadeInLeft" data-wow-delay="0s">
            <div class="product-banner"><img src="images/banner3.jpg" alt="" width="570" height="715" />

            </div>
          </div>
          <div class="col-md-5 col-lg-6">
            <div class="row row-30 justify-content-center">
              <div class="col-sm-6 col-md-12 col-lg-6">
                <div class="oh-desktop">
                  <!-- Product-->
                  <article class="product product-2 box-ordered-item wow slideInRight" data-wow-delay="0s">
                    <div class="unit flex-row flex-lg-column">
                      <div class="unit-left">
                        <div class="product-figure"><img src="images/product-5-270x280.png" alt="" width="270" height="280" />
                          <div class="product-button"><a class="button button-md button-white button-ujarak" href="#">Adicionar</a></div>
                        </div>
                      </div>
                      <div class="unit-body">
                        <h6 class="product-title"><a href="#">Avocados</a></h6>
                        <div class="product-price-wrap">
                          <div class="product-price product-price-old">$59.00</div>
                          <div class="product-price">$28.00</div>
                        </div><a class="button button-sm button-secondary button-ujarak" href="#">Adicionar</a>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
              <div class="col-sm-6 col-md-12 col-lg-6">
                <div class="oh-desktop">
                  <!-- Product-->
                  <article class="product product-2 box-ordered-item wow slideInLeft" data-wow-delay="0s">
                    <div class="unit flex-row flex-lg-column">
                      <div class="unit-left">
                        <div class="product-figure"><img src="images/product-6-270x280.png" alt="" width="270" height="280" />
                          <div class="product-button"><a class="button button-md button-white button-ujarak" href="#">Adicionar</a></div>
                        </div>
                      </div>
                      <div class="unit-body">
                        <h6 class="product-title"><a href="#">Corn</a></h6>
                        <div class="product-price-wrap">
                          <div class="product-price">$27.00</div>
                        </div><a class="button button-sm button-secondary button-ujarak" href="#">Adicionar</a>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
              <div class="col-sm-6 col-md-12 col-lg-6">
                <div class="oh-desktop">
                  <!-- Product-->
                  <article class="product product-2 box-ordered-item wow slideInLeft" data-wow-delay="0s">
                    <div class="unit flex-row flex-lg-column">
                      <div class="unit-left">
                        <div class="product-figure"><img src="images/product-8-270x280.png" alt="" width="270" height="280" />
                          <div class="product-button"><a class="button button-md button-white button-ujarak" href="#">Adicionar</a></div>
                        </div>
                      </div>
                      <div class="unit-body">
                        <h6 class="product-title"><a href="#">Artichokes</a></h6>
                        <div class="product-price-wrap">
                          <div class="product-price">$23.00</div>
                        </div><a class="button button-sm button-secondary button-ujarak" href="#">Adicionar</a>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
              <div class="col-sm-6 col-md-12 col-lg-6">
                <div class="oh-desktop">
                  <!-- Product-->
                  <article class="product product-2 box-ordered-item wow slideInRight" data-wow-delay="0s">
                    <div class="unit flex-row flex-lg-column">
                      <div class="unit-left">
                        <div class="product-figure"><img src="images/product-7-270x280.png" alt="" width="270" height="280" />
                          <div class="product-button"><a class="button button-md button-white button-ujarak" href="#">Adicionar</a></div>
                        </div>
                      </div>
                      <div class="unit-body">
                        <h6 class="product-title"><a href="#">Broccoli</a></h6>
                        <div class="product-price-wrap">
                          <div class="product-price">$25.00</div>
                        </div><a class="button button-sm button-secondary button-ujarak" href="#">Adicionar</a>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section CTA 2-->
    <section class="section text-center">
      <div class="parallax-container" data-parallax-img="images/banner2.jpg">
        <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-40">
          <div class="container">
            <h2 class="oh font-weight-normal"><span class="d-inline-block wow slideInDown" data-wow-delay="0s">Promoções</span></h2>
            <p class="oh big text-width-large"><span class="d-inline-block wow slideInUp" data-wow-delay=".2s">Veja todas as nossas promoções clicando no botão abaixo</span></p><a class="button button-primary button-icon button-icon-left button-ujarak wow fadeInUp" href="https://www.youtube.com/watch?v=-AhmuMqZB0s" data-lightgallery="item" data-wow-delay=".1s"><span class="icon mdi mdi-play"></span>Todas as promoções</a>
          </div>
        </div>
      </div>
    </section>


    <!-- About us-->
    <section class="section">
      <div class="parallax-container" data-parallax-img="images/bg-parallax-2.jpg">
        <div class="parallax-content section-xl context-dark bg-overlay-68">
          <div class="container">
            <div class="row row-lg row-50 justify-content-center border-classic border-classic-big">
              <div class="col-sm-6 col-md-5 col-lg-3 wow fadeInLeft" data-wow-delay="0s">
                <div class="counter-creative">
                  <div class="counter-creative-number"><span class="counter">12</span><span class="icon counter-creative-icon fl-bigmug-line-trophy55"></span>
                  </div>
                  <h6 class="counter-creative-title">Premiações</h6>
                </div>
              </div>
              <div class="col-sm-6 col-md-5 col-lg-3 wow fadeInLeft" data-wow-delay=".1s">
                <div class="counter-creative">
                  <div class="counter-creative-number"><span class="counter">2</span><span class="symbol">k</span><span class="icon counter-creative-icon fl-bigmug-line-up104"></span>
                  </div>
                  <h6 class="counter-creative-title">Produtos</h6>
                </div>
              </div>
              <div class="col-sm-6 col-md-5 col-lg-3 wow fadeInLeft" data-wow-delay=".2s">
                <div class="counter-creative">
                  <div class="counter-creative-number"><span class="counter">679</span><span class="icon counter-creative-icon fl-bigmug-line-sun81"></span>
                  </div>
                  <h6 class="counter-creative-title">Clientes Satisfeitos</h6>
                </div>
              </div>
              <div class="col-sm-6 col-md-5 col-lg-3 wow fadeInLeft" data-wow-delay=".3s">
                <div class="counter-creative">
                  <div class="counter-creative-number"><span class="counter">13</span><span class="icon counter-creative-icon fl-bigmug-line-user143"></span>
                  </div>
                  <h6 class="counter-creative-title">Lojas</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- Improve your interior with deco-->
    <section class="section section-md bg-default section-top-image">
      <div class="container">
        <div class="oh h2-title">
          <h2 class="wow slideInUp" data-wow-delay="0s">Alguns Produtos</h2>
        </div>
        <div class="row row-30" data-lightgallery="group">
          <div class="col-sm-6 col-lg-4">
            <div class="oh-desktop">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInLeft" data-wow-delay="0s">
                <div class="thumbnail-mary-figure"><img src="images/galeria/01-tumb.jpg" alt="" width="370" height="303" />
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/galeria/01.jpg" data-lightgallery="item"><img src="images/galeria/01-tumb.jpg" alt="" width="370" height="303" /></a>
                  <h4 class="thumbnail-mary-title"><a href="#">Hamburguer</a></h4>
                </div>
              </article>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="oh-desktop">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInUp" data-wow-delay=".1s">
                <div class="thumbnail-mary-figure"><img src="images/galeria/02-tumb.jpg" alt="" width="370" height="303" />
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/galeria/02.jpg" data-lightgallery="item"><img src="images/galeria/02-tumb.jpg" alt="" width="370" height="303" /></a>
                  <h4 class="thumbnail-mary-title"><a href="#">Artesanais</a></h4>
                </div>
              </article>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="oh-desktop">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInRight" data-wow-delay=".0s">
                <div class="thumbnail-mary-figure"><img src="images/galeria/03-tumb.jpg" alt="" width="370" height="303" />
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/galeria/03.jpg" data-lightgallery="item"><img src="images/galeria/03-tumb.jpg" alt="" width="370" height="303" /></a>
                  <h4 class="thumbnail-mary-title"><a href="#">Bebidas</a></h4>
                </div>
              </article>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="oh-desktop">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInUp" data-wow-delay=".1s">
                <div class="thumbnail-mary-figure"><img src="images/galeria/04-tumb.jpg" alt="" width="370" height="303" />
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/galeria/04.jpg" data-lightgallery="item"><img src="images/galeria/04-tumb.jpg" alt="" width="370" height="303" /></a>
                  <h4 class="thumbnail-mary-title"><a href="#">Açai</a></h4>
                </div>
              </article>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="oh-desktop">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInLeft" data-wow-delay="0s">
                <div class="thumbnail-mary-figure"><img src="images/galeria/05-tumb.jpg" alt="" width="370" height="303" />
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/galeria/05.jpg" data-lightgallery="item"><img src="images/galeria/05-tumb.jpg" alt="" width="370" height="303" /></a>
                  <h4 class="thumbnail-mary-title"><a href="#">Pizza</a></h4>
                </div>
              </article>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="oh-desktop">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInDown" data-wow-delay=".1s">
                <div class="thumbnail-mary-figure"><img src="images/galeria/06-tumb.jpg" alt="" width="370" height="303" />
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/galeria/06.jpg" data-lightgallery="item"><img src="images/galeria/06-tumb.jpg" alt="" width="370" height="303" /></a>
                  <h4 class="thumbnail-mary-title"><a href="#">Vinhos</a></h4>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include_once("rodape.php"); ?>
  </div>
  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Javascript-->
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
  <!-- coded by Ragnar-->
</body>

</html>