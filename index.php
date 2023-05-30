<?php require 'public/header.php'?>

      <main>
        <div
          class="layout widget-type_system_widget_v4_promo_slider_2"
          style="
            --slide-overlay-color: #000000;
            --slide-overlay-color-is-dark: true;
            --slide-overlay-color-minor-shade: #1a1a1a;
            --slide-overlay-color-minor-shade-is-dark: true;
            --slide-overlay-color-major-shade: #333333;
            --slide-overlay-color-major-shade-is-dark: true;
            --slide-overlay-color-half-shade: #808080;
            --slide-overlay-color-half-shade-is-dark: true;
            --slide-overlay-opacity: 0.3;
            --img-ratio: 3;
            --img-border-radius: 0px;
            --autoplay: false;
            --autoplay-delay: 5;
            --hide-arrows: false;
            --layout-wide-bg: false;
            --layout-pt: 0vw;
            --layout-pb: 0vw;
            --layout-content-max-width: 1408px;
            --layout-wide-content: false;
            --layout-edge: false;
            --hide-desktop: false;
            --hide-mobile: false;
          "
        >
          <div class="layout__content">
<!-- SLARER_________________________________________________________________________________________________________________________________________ -->


            <?php require ('public/slider.php')?>
          </div>
        </div>

       

        <div
          class="layout widget-type_system_widget_v4_special_products_2"
          style="
            --product-desc-limit: 10;
            --hide-title: false;
            --hide-description: true;
            --count_special_products: 12;
            --slide-width: 220px;
            --slide-gap: 30rem;
            --img-ratio: 1;
            --img-fit: contain;
            --switch-img-on-hover: false;
            --product-info-accent: price;
            --product-info-align: left;
            --sticker-font-size: 0.9rem;
            --slide-width-mobile: 160px;
            --layout-wide-bg: false;
            --layout-pt: 2vw;
            --layout-pb: 2vw;
            --layout-content-max-width: 1408px;
            --layout-wide-content: false;
            --layout-edge: false;
            --hide-desktop: false;
            --hide-mobile: false;
          "
        >
           <div class="layout__content">
            <div class="special-products js-special-products">
              <div class="special-products__head">
                <div class="h2 special-products__title heading">Весь товар</div>
                <div class="special-products__slider-controls">
                  <div
                    class="special-products__slider-arrow special-products__slider-arrow-prev js-move-slide"
                  >
                    <span
                      class="special-products__slider-arrow-icon icon-arrow-left"
                    ></span>
                  </div>
                  <div
                    class="special-products__slider-arrow special-products__slider-arrow-next js-move-slide"
                  >
                    <span
                      class="special-products__slider-arrow-icon icon-arrow-right"
                    ></span>
                  </div>
                </div>
              </div>
              <div
                class="splide js-special-products-slider"
                data-slide-min-width="220"
                data-slide-min-width-mobile="160"
                data-slide-gap="30"
              >
                <div class="splide__track">
                  <div class="splide__list">
                    
                    
                    
<!-- ____________________________________________________________________________________________________________________________________________________
Начало слайдера        -->
                    
                    
                    <?php require('public/allslider.php')?>
                    


                  </div>
                </div>
              </div>
            </div>
          </div> 
        </div>

        <div
          class="layout widget-type_system_widget_v4_banner_list_4"
          style="
            --img-ratio: 1.5;
            --banner-border-radius: 0px;
            --zoom-on-hover: false;
            --bg-items: #f8f8f8;
            --bg-items-is-light: true;
            --bg-items-minor-shade: #f7f7f7;
            --bg-items-minor-shade-is-light: true;
            --bg-items-major-shade: #f7f7f7;
            --bg-items-major-shade-is-light: true;
            --bg-items-half-shade: #f4f4f4;
            --bg-items-half-shade-is-light: true;
            --grid-list-row-gap: 1.5rem;
            --grid-list-column-gap: 1.5rem;
            --layout-wide-bg: true;
            --layout-pt: 1vw;
            --layout-pb: 1vw;
            --layout-content-max-width: 1408px;
            --layout-wide-content: false;
            --layout-edge: false;
            --hide-desktop: false;
            --hide-mobile: false;
          "
        >
          <div class="layout__content">
            <div class="banner-list grid-list">
              <a
                href=""
                data-block-id="13474218"
                class="banner-list__item editable-block"
              >
                <div class="img-ratio img-ratio_cover banner-list__item-photo">
                  <div class="img-ratio__inner">
                    <picture>
                      <source
                        media="(max-width:480px)"
                        data-srcset="https://puzzleit.ru/files/puzzles/162/162410/_original.jpg"
                        type="image/webp"
                        class="lazyload"
                      />

                      <img
                        data-src="https://puzzleit.ru/files/puzzles/162/162410/_original.jpg"
                        class="lazyload"
                        alt="Конфеты"
                      />
                    </picture>
                  </div>
                </div>

                <div class="banner-list__item-title">Конфеты</div>
              </a>

              <a
                href=""
                data-block-id="13474219"
                class="banner-list__item editable-block"
              >
                <div class="img-ratio img-ratio_cover banner-list__item-photo">
                  <div class="img-ratio__inner">
                    <picture>
                      <source
                        media="(max-width:480px)"
                        data-srcset="https://naked-science.ru/wp-content/uploads/2023/01/1612338133_79-p-fon-molochnii-shokolad-92.jpg"
                        type="image/webp"
                        class="lazyload"
                      />

                      <img
                        data-src="https://naked-science.ru/wp-content/uploads/2023/01/1612338133_79-p-fon-molochnii-shokolad-92.jpg"
                        class="lazyload"
                        alt="Для него"
                      />
                    </picture>
                  </div>
                </div>

                <div class="banner-list__item-title">Шоколад</div>
              </a>

              <a
                href=""
                data-block-id="13474220"
                class="banner-list__item editable-block"
              >
                <div class="img-ratio img-ratio_cover banner-list__item-photo">
                  <div class="img-ratio__inner">
                    <picture>
                      <source
                        media="(max-width:480px)"
                        data-srcset="https://avatars.dzeninfra.ru/get-zen_doc/1579004/pub_5d68d4c678125e00ad64f85d_5d68d590028d6800ac248e06/scale_1200"
                        type="image/webp"
                        class="lazyload"
                      />

                      <img
                        data-src="https://avatars.dzeninfra.ru/get-zen_doc/1579004/pub_5d68d4c678125e00ad64f85d_5d68d590028d6800ac248e06/scale_1200"
                        class="lazyload"
                        alt="Для неё"
                      />
                    </picture>
                  </div>
                </div>

                <div class="banner-list__item-title">Напитки</div>
              </a>

              <a
                href=""
                data-block-id="13474221"
                class="banner-list__item editable-block"
              >
                <div class="img-ratio img-ratio_cover banner-list__item-photo">
                  <div class="img-ratio__inner">
                    <picture>
                      <source
                        media="(max-width:480px)"
                        data-srcset="https://ss.sport-express.ru/userfiles/materials/183/1834898/volga.jpg"
                        type="image/webp"
                        class="lazyload"
                      />

                      <img
                        data-src="https://ss.sport-express.ru/userfiles/materials/183/1834898/volga.jpg"
                        class="lazyload"
                        alt="Сладости"
                      />
                    </picture>
                  </div>
                </div>

                <div class="banner-list__item-title">Сладости</div>
              </a>

              <a
                href=""
                data-block-id="13474222"
                class="banner-list__item editable-block"
              >
                <div class="img-ratio img-ratio_cover banner-list__item-photo">
                  <div class="img-ratio__inner">
                    <picture>
                      <source
                        media="(max-width:480px)"
                        data-srcset="https://tprestige.com/wp-content/uploads/2019/11/white-pink.jpg"
                        type="image/webp"
                        class="lazyload"
                      />

                      <img
                        data-src="https://tprestige.com/wp-content/uploads/2019/11/white-pink.jpg"
                        class="lazyload"
                        alt="Зафир"
                      />
                    </picture>
                  </div>
                </div>

                <div class="banner-list__item-title">Зефир</div>
              </a>

              <a
                href="#"
                data-block-id="13474223"
                class="banner-list__item editable-block"
              >
                <div class="img-ratio img-ratio_cover banner-list__item-photo">
                  <div class="img-ratio__inner">
                    <picture>
                      <source
                        media="(max-width:480px)"
                        data-srcset="https://n1s1.hsmedia.ru/3f/2f/71/3f2f71ab6311ec8d8a0a8cd6e8e12b53/728x526_1_a171defad1fb6b4ced11e1498be91dc8@2037x1472_0xac120003_3471390891583422181.jpg"
                        type="image/webp"
                        class="lazyload"
                      />

                      <img
                        data-src="https://n1s1.hsmedia.ru/3f/2f/71/3f2f71ab6311ec8d8a0a8cd6e8e12b53/728x526_1_a171defad1fb6b4ced11e1498be91dc8@2037x1472_0xac120003_3471390891583422181.jpg"
                        class="lazyload"
                        alt="Мармелад"
                      />
                    </picture>
                  </div>
                </div>

                <div class="banner-list__item-title">Мармелад</div>
              </a>
            </div>
          </div>
        </div>




        <!-- Статичный Банер______________________________________________________________________________________________________________________________________________ -->

        <div
          class="layout widget-type_system_widget_v4_page_banner_1"
          style="
            --banner-img: 'https://static.insales-cdn.com/files/1/209/14926033/original/Фото__11_.jpg';
            --img-position: left;
            --hide-button: false;
            --img-fit: cover;
            --img-ratio: 2;
            --img-size: 65%;
            --font-size: 18px;
            --font-size-mobile: 18px;
            --align-content: start;
            --layout-wide-bg: false;
            --layout-pt: 2vw;
            --layout-pb: 2vw;
            --layout-content-max-width: 1408px;
            --layout-wide-content: false;
            --layout-edge: false;
            --hide-desktop: false;
            --hide-mobile: false;
          "
        >
        <?php require 'public/stat-baner.php'?>
        </div>

        




        <!-- _________________________________________________________________________________________________________________ 
        Раздел с АКЦИЯМИ
        -->

        <div
          class="layout widget-type_system_widget_v4_article_previews_1"
          style="
            --article_desc_limit: 20;
            --hide-title: false;
            --hide-description: true;
            --hide-date: false;
            --grid-list-min-width: 260px;
            --img-fit: cover;
            --img-ratio: 1;
            --img-border-radius: 10px;
            --layout-wide-bg: false;
            --grid-list-row-gap: 2rem;
            --grid-list-column-gap: 2rem;
            --layout-pt: 1vw;
            --layout-pb: 1vw;
            --layout-content-max-width: 1408px;
            --layout-wide-content: false;
            --layout-edge: false;
            --hide-desktop: false;
            --hide-mobile: false;
          "
        >
        <?php require 'public/stock.php'?>
        </div>
<!-- __________________________________________________________________________________________________________
   Обратная связь
-->

      
       

        <div
          class="layout widget-type_system_widget_v4_feedback_1"
          style="
            --align-title: center;
            --hide-use-agree: false;
            --layout-wide-bg: true;
            --layout-pt: 2vw;
            --layout-pb: 2vw;
            --layout-content-max-width: 680px;
            --layout-wide-content: false;
            --layout-edge: false;
            --hide-desktop: false;
            --hide-mobile: false;
          "
        >
          <div class="layout__content">
            <div class="feedback">
              <div class="feedback__title heading">Обратная связь</div>

              <form
                method="post"
                action=""
                data-feedback-form-wrapper
                class="feedback__form"
              >
                <div
                  data-feedback-form-success='{"showTime": 10000}'
                  class="h4 feedback__success-message"
                >
                  Сообщение успешно отправлено!
                </div>
                <div class="feedback__fields">
                  <div class="grid-list grid-list_wide feedback__row">
                    <div
                      data-feedback-form-field-area
                      class="feedback__field-area"
                    >
                      <input
                        name="name"
                        data-feedback-form-field='{"isRequired": true, "errorMessage": "Необходимо заполнить поле Имя"}'
                        type="text"
                        value=""
                        placeholder="Имя*"
                        class="form-control form-control_size-l form-control_wide"
                      />
                      <div
                        data-feedback-form-field-error
                        class="feedback__field-error"
                      ></div>
                    </div>
                    <div
                      data-feedback-form-field-area
                      class="feedback__field-area"
                    >
                      <input
                        name="from"
                        data-feedback-form-field='{"isRequired": true, "errorMessage": "Неверно заполнено поле Email"}'
                        type="text"
                        value=""
                        placeholder="Ваша почта*"
                        class="form-control form-control_size-l form-control_wide"
                      />
                      <div
                        data-feedback-form-field-error
                        class="feedback__field-error"
                      ></div>
                    </div>
                  </div>

                  <div
                    data-feedback-form-field-area
                    class="feedback__field-area"
                  >
                    <textarea
                      name="content"
                      data-feedback-form-field='{"isRequired": true, "errorMessage": "Пожалуйста, введите сообщение"}'
                      placeholder="Ваш вопрос, отзыв или пожелание*"
                      class="form-control form-control_wide"
                    ></textarea>
                    <div
                      data-feedback-form-field-error
                      class="feedback__field-error"
                    ></div>
                  </div>

                  <div
                    data-feedback-form-field-area
                    class="feedback__field-area agree"
                  >
                    <label class="agree__checkbox">
                      <input
                        data-feedback-form-agree='{"errorMessage": "Необходимо подтвердить согласие"}'
                        name="agree"
                        type="checkbox"
                        value=""
                        autocomplete="off"
                        class="agree__field"
                      />
                      <span class="agree__content">
                        <span class="agree__btn icon-check"></span>
                        <span class="agree__label">
                          Настоящим подтверждаю, что я ознакомлен и согласен с
                          условиями оферты и политики конфиденциальности *
                        </span>
                      </span>
                    </label>
                    <div
                      data-feedback-form-field-error
                      class="feedback__field-error"
                    ></div>
                  </div>

                  <input
                    type="hidden"
                    value="Форма обратной связи"
                    data-feedback-form-field
                    name="subject"
                  />

                  <div class="feedback__submit">
                    <button
                      class="button button_size-l feedback__submit-btn"
                      type="submit"
                    >
                      Отправить
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </main>
      <!-- ФУТЕР____________________________________________________________________________________________________________________________________ -->
     

      <?php require 'public/footer.php'?>