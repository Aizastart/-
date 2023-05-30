<?php require_once './function/connect.php';?>
<?php
$allPrise = $pdo->prepare("SELECT * From prace WHERE categories='Мармелад'");
$allPrise->execute();

$allPrises=$allPrise->fetchAll(PDO::FETCH_OBJ);
?>
<main>
<div class="layout widget-type_system_widget_v4_filter_sort_1"
    style="--hide-sorting-on-mobile:false; --hide-sorting-border:true; --layout-wide-bg:true; --layout-pt:1vw; --layout-pb:0.5vw; --layout-wide-content:false; --layout-edge:false; --hide-desktop:false; --hide-mobile:false;">
    <div class="layout__content">
      <div class="filter-top-controls">
        <div class="collection-sort">
          <form class="collection-order-wrapper" action="/collection/podarki" method="get">
            <div class="collection-order is-sort">
              
              <h2 class="js-sorting-trigger form-control form-control_size-b" name="">
                  Мармелад
                </h2>
              
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>  
  
<div class="layout widget-type_system_widget_v4_catalog_2"
    style="--hide-description:true; --catalog-grid-list-min-width:220px; --img-ratio:1; --img-fit:contain; --product-desc-limit:10; --product-info-align:left; --switch-img-on-hover:false; --product-info-accent:price; --sticker-font-size:0.9rem; --layout-wide-bg:false; --catalog-grid-list-row-gap:2rem; --catalog-grid-list-column-gap:2rem; --layout-pt:2vw; --layout-pb:2vw; --layout-content-max-width:1408px; --layout-wide-content:false; --layout-edge:false; --hide-desktop:false; --hide-mobile:false; --catalog-grid-list-min-width-mobile:160px;">
    <div class="layout__content">
      <div class="catalog">
        <div class="grid-list catalog-list" data-collection-infinity="/collection/podarki?page=2">
         <?php foreach($allPrises as $allPre): ?> 
        <div class="splide__slide">

           
          <form action="/cart_items" method="post" data-product-id="222581034"
              class="product-preview  is-zero-count-shown      is-forbid-order-over-existing ">
              <div class="product-preview__content">
                <div class="product-preview__area-photo">
                  <div class="product-preview__photo">
                    <div class="img-ratio img-ratio_cover">
                      <div class="img-ratio__inner">
                        
                          <picture>
                            <img
                              src="../img/prace/<?php echo $allPre->filename?>"
                              class="" alt="<?php echo $allPre->filename?>">
                          </picture>
                        
                      </div>
                    </div>
                    <div class="product-preview__available">В наличии</div>
                  </div>
                </div>
                <div class="product-preview__area-title">
                  <div class="product-preview__title">
                    <a href="/product/myagkaya-igrushka-medved-boiko-plyushevyy-mishka-bezhevyy-s-bantom">
                    <?php echo $allPre->name?></a>
                  </div>
                </div>
                <div class="product-preview__area-description">
                </div>
                <div class="product-preview__area-bottom">
                  <div class="product-preview__price">
                    <span class="product-preview__price-old"><?php echo $allPre->sales?> сом</span>
                    <span class="product-preview__price-cur"><?php echo $allPre->sales?> сом</span>
                  </div>
                  <div class="product-preview__controls">
                    <input type="hidden" name="quantity" value="1" />
                    <input type="hidden" name="variant_id" value="379011756" />
                    <button class="button button_wide product-preview__buy-btn" type="submit" data-item-add
                      class="button">В корзину</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <?php endforeach?>
        </div>
      </div>
    </div>







    <div class="layout widget-type_system_widget_v4_stiker_hex_color" style="">
      <div class="layout__content">
        <style>
        [data-sticker-title] {
          background-color: #009688;
          --bg: #009688;
          --color-text: var(--color-text-light);
          --color-text-minor-shade: var(--color-text-light-minor-shade);
          --color-text-major-shade: var(--color-text-light-major-shade);
          --color-text-half-shade: var(--color-text-light-half-shade);
          color: var(--color-text);
        }

        [data-sticker-title="Новинка"] {
          background-color: #009688;
          --bg: #009688;
          --color-text: var(--color-text-light);
          --color-text-minor-shade: var(--color-text-light-minor-shade);
          --color-text-major-shade: var(--color-text-light-major-shade);
          --color-text-half-shade: var(--color-text-light-half-shade);
          color: var(--color-text);
        }

        [data-sticker-title="Распродажа"] {
          background-color: #e44542;
          --bg: #e44542;
          --color-text: var(--color-text-light);
          --color-text-minor-shade: var(--color-text-light-minor-shade);
          --color-text-major-shade: var(--color-text-light-major-shade);
          --color-text-half-shade: var(--color-text-light-half-shade);
          color: var(--color-text);
        }

        [data-sticker-title="sticker-sale"] {
          background-color: #e44542;
          --bg: #e44542;
          --color-text: var(--color-text-light);
          --color-text-minor-shade: var(--color-text-light-minor-shade);
          --color-text-major-shade: var(--color-text-light-major-shade);
          --color-text-half-shade: var(--color-text-light-half-shade);
          color: var(--color-text);
        }

        [data-sticker-title="sticker-preorder"] {
          background-color: #e44542;
          --bg: #e44542;
          --color-text: var(--color-text-light);
          --color-text-minor-shade: var(--color-text-light-minor-shade);
          --color-text-major-shade: var(--color-text-light-major-shade);
          --color-text-half-shade: var(--color-text-light-half-shade);
          color: var(--color-text);
        }
        </style>
      </div>
    </div>





    <div class="layout widget-type_system_widget_v4_button_on_top_1"
      style="--button-view:bg; --icon-view:icon-arrow-up; --align:right; --size:1.5rem; --margin-bottom:1rem; --margin-side:1rem; --hide-desktop:false; --hide-mobile:true;">
      <div class="layout__content">
        <button type="button" class="btn-on-top js-go-top-page">
          <span class="icon-arrow-up"></span>
        </button>
      </div>
    </div>


  </div>
  </div>
  <script src="/served_assets/shop/demoshop_panel-cf1b4208cbba0ab0ba8427002f2d7485ce9f0eaa3850a3e6b62a0ea822001ded.js">
  </script>
  <link rel="stylesheet"
    href="/served_assets/shop/demoshop_panel-a7bb6ff61ba5696abfc00e1ad326417cc52cb2ccd5bf0f6b114bf316a4f47169.css"
    media="screen" />
  </body>

  <script src='https://static.insales-cdn.com/assets/common-js/common.v2.23.43.js'></script>
  <script
    src='https://static.insales-cdn.com/assets/static-versioned/1.26/static/libs/jquery/3.5.1/jquery-3.5.1.min.js'>
  </script>
  <script src='https://static.insales-cdn.com/assets/static-versioned/2.77/static/libs/my-layout/1.0.0/my-layout.js'>
  </script>
  <link href='https://static.insales-cdn.com/assets/static-versioned/3.63/static/libs/my-layout/1.0.0/core-css.css'
    rel='stylesheet' type='text/css' />
  <script
    src='https://static.insales-cdn.com/assets/static-versioned/1.26/static/libs/vanilla-lazyload/17.3.0/lazyload.min.js'>
  </script>
  <script
    src='https://static.insales-cdn.com/assets/static-versioned/3.55/static/libs/cut-list/1.0.0/jquery.cut-list.min.js'>
  </script>
  <link
    href='https://static.insales-cdn.com/assets/static-versioned/3.55/static/libs/cut-list/1.0.0/jquery.cut-list.css'
    rel='stylesheet' type='text/css' />
  <script
    src='https://static.insales-cdn.com/assets/static-versioned/2.56/static/libs/nouislider/14.6.3/nouislider.min.js'>
  </script>
  <link
    href='https://static.insales-cdn.com/assets/static-versioned/1.26/static/libs/nouislider/14.6.3/nouislider.min.css'
    rel='stylesheet' type='text/css' />
  <script
    src='https://static.insales-cdn.com/assets/static-versioned/1.32/static/libs/js-cookie/3.0.0/js.cookie.min.js'>
  </script>
  <script src='https://static.insales-cdn.com/assets/static-versioned/1.90/static/libs/microalert/0.1.0/microAlert.js'>
  </script>
  <link href='https://static.insales-cdn.com/assets/static-versioned/1.90/static/libs/microalert/0.1.0/microAlert.css'
    rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="../css/slyle2.css">

  <meta name="font-static-version" content="3.11">
  <meta name="system-google-fonts"
    content="Roboto,Comfortaa,Jura,Montserrat,Oswald,Lobster,Neucha,El Messiri,PT Serif,Anonymous Pro,Istok Web,Fira Sans,Open Sans,Manrope,Jost,Exo 2,Raleway,Playfair Display,Noto Serif Display,Press Start 2P,">


  <link rel="preload" class="font-main" as="style"
    href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900&subset=cyrillic,latin&display=swap" />

  <link rel="stylesheet" class="font-main"
    href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900&subset=cyrillic,latin&display=swap"
    media="print" onload="this.media='all'" />







  <link rel="preload" class="font-main" as="style"
    href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900&subset=cyrillic,latin&display=swap" />

  <link rel="stylesheet" class="font-main"
    href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900&subset=cyrillic,latin&display=swap"
    media="print" onload="this.media='all'" />







  <link rel="preload" as="style"
    href="https://static.insales-cdn.com/assets/static-versioned/3.11/static/icons/icons-minimal/style.css" />

  <link rel="stylesheet"
    href="https://static.insales-cdn.com/assets/static-versioned/3.11/static/icons/icons-minimal/style.css"
    media="print" onload="this.media='all'" />










  <link href="https://static.insales-cdn.com/assets/1/2147/1583203/1684930100/theme.css" rel="stylesheet"
    type="text/css" onload="document.body.classList.add('settings_loaded');" />
  <script src="https://static.insales-cdn.com/assets/1/2147/1583203/1684930100/theme.js" charset="utf-8"></script>

  </html>