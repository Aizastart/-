<?php require_once './function/connect.php';?>
<?php
$sli = $pdo->prepare("SELECT * From slider");
$sli->execute();

$slider=$sli->fetchAll(PDO::FETCH_OBJ);
?>
<div class="promo-slider">
              <div
                class="splide js-promo-slider"
                data-autoplay="false"
                data-autoplay-delay="5"
              >
                <div class="splide__track">
                  <div class="splide__list">
                    <?php foreach($slider as $slide):  ?>
                    <div class="splide__slide">
                      <a
                        href="#"
                        class="promo-slider__item"
                      >
                        <div class="promo-slider__item-photo">
                          <div class="img-ratio img-ratio_cover">
                            <div class="img-ratio__inner">
                              <picture>
                                

                                <img
                                  data-src="../img/slider/<?php echo $slide->filename?>"
                                  class="lazyload"
                                />
                              </picture>
                            </div>
                          </div>
                        </div>
                        <div class="promo-slider__item-content">
                        <?php echo $slide->name?>
                        </div>
                      </a>
                    </div>
                    <?php endforeach?>


                    
                  </div>
                </div>

                <div class="splide__arrows">
                  <button
                    type="button"
                    class="splide__arrow splide__arrow--prev"
                  >
                    <span class="splide__arrow-icon icon-angle-left"></span>
                  </button>
                  <button
                    type="button"
                    class="splide__arrow splide__arrow--next"
                  >
                    <span class="splide__arrow-icon icon-angle-right"></span>
                  </button>
                </div>
              </div>
            </div>