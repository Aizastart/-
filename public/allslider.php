<?php require_once './function/connect.php';?>
<?php
$allSli = $pdo->prepare("SELECT * From prace");
$allSli->execute();

$allSlider=$allSli->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach($allSlider as $allSlide): ?>
<div class="splide__slide">
          
                      <form
                        action="/cart_items"
                        method="post"
                        
                        class="product-preview is-zero-count-shown is-forbid-order-over-existing"
                      >
                        <div class="product-preview__content">
                          <div class="product-preview__area-photo">
                            <div class="product-preview__photo">
                              <div class="img-ratio img-ratio_cover">
                                <div class="img-ratio__inner">
                                  <a
                                    href="/product/myagkaya-igrushka-medved-boiko-plyushevyy-mishka-bezhevyy-s-bantom"
                                  >
                                    <picture>
                                      <img
                                        data-src="../img/prace/<?php echo $allSlide->filename?>"
                                        class="lazyload"
                                        alt="<?php echo $allSlide->name?>"
                                      />
                                    </picture>
                                  </a>
                                </div>
                              </div>
                              
                            </div>
                          </div>

                          <div class="product-preview__area-title">
                            <div class="product-preview__title">
                              <a
                                href="/product/myagkaya-igrushka-medved-boiko-plyushevyy-mishka-bezhevyy-s-bantom"
                                ><?php echo $allSlide->name?></a
                              >
                            </div>
                          </div>

                          <div class="product-preview__area-description"></div>

                          <div class="product-preview__area-bottom">
                            <div class="product-preview__price">
                              <span class="product-preview__price-old"
                                ><?php echo $allSlide->sales?></span
                              >

                              <span class="product-preview__price-cur"
                                ><?php echo $allSlide->hotsales?></span
                              >
                            </div>

                            <div class="product-preview__controls">
                              <input type="hidden" name="quantity" value="1" />
                              <input
                                type="hidden"
                                name="variant_id"
                                value="379011756"
                              />

                              <button
                                class="button button_wide product-preview__buy-btn"
                                type="submit"
                                data-item-add
                                class="button"
                              >
                                В корзину
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <?php endforeach?>