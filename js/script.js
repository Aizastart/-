    try {
      let widget = ".widget-type_system_widget_v4_alerts";
      let $widget = $(".widget-type_system_widget_v4_alerts");
      let alertsSettings = $widget
        .find("[data-micro-alerts-settings]")
        .data("micro-alerts-settings");

      function replaceAlertCheckIcon(message) {
        let iconCheck =
          '<span class="icon-check" style="margin-right:5px;"></span>';
        if (message.indexOf("✓") != -1) {
          return message.replace(/✓/gi, iconCheck);
        } else {
          return `${iconCheck} ${message}`;
        }
      }

      function replaceAlertWarningIcon(message) {
        let iconWarning =
          '<span class="icon-exclamation-triangle" style="margin-right:5px;"></span>';
        if (message.indexOf("⚠") != -1) {
          return message.replace(/⚠/gi, iconWarning);
        } else {
          return `${iconWarning} ${message}`;
        }
      }

      EventBus.subscribe("error-feedback:insales:ui_feedback", function (data) {
        let iconWarning =
          '<span class="icon-exclamation-triangle" style="margin-right:5px;"></span>';
        $.each(data.errors, function (i, val) {
          let errorText = typeof val == "string" ? val : val[0];

          microAlert(iconWarning + errorText, 5000, {
            modificator: "warning-notice",
          });
        });
      });

      EventBus.subscribe("send-feedback:insales:ui_feedback", function (data) {
        let success_feedback = alertsSettings["success_feedback"];
        let preorder = false;

        if ($(data.form[0]).find('[name="is-preorder-form"]').length) {
          success_feedback = alertsSettings["success_preorder"];
          preorder = true;
        }

        if ($(window).width() >= "767" && preorder) {
          microAlert(replaceAlertCheckIcon(success_feedback), 5000, {
            modificator: "success-notice",
          });
        } else if ($(window).width() <= "768" && !preorder) {
          microAlert(replaceAlertCheckIcon(success_feedback), 5000, {
            modificator: "success-notice",
          });
        }
      });

      EventBus.subscribe("overload:insales:compares", function () {
        let overload_compares = alertsSettings["overload_compares"];
        microAlert(replaceAlertWarningIcon(overload_compares), 5000, {
          modificator: "warning-notice",
        });
      });

      EventBus.subscribe("add_item:insales:compares", () => {
        let add_item_compares = alertsSettings["add_item_compares"];

        microAlert(replaceAlertCheckIcon(add_item_compares), 5000, {
          modificator: "success-notice",
        });
      });

      EventBus.subscribe("remove_item:insales:compares", () => {
        let remove_item_compares = alertsSettings["remove_item_compares"];
        microAlert(remove_item_compares, 5000, {
          modificator: "success-notice",
        });
      });

      EventBus.subscribe("add_item:insales:favorites_products", () => {
        let add_item_favorites = alertsSettings["add_item_favorites"];
        microAlert(replaceAlertCheckIcon(add_item_favorites), 5000, {
          modificator: "success-notice",
        });
      });

      EventBus.subscribe("remove_item:insales:favorites_products", () => {
        let remove_item_favorites = alertsSettings["remove_item_favorites"];
        microAlert(remove_item_favorites, 5000, {
          modificator: "success-notice",
        });
      });

      EventBus.subscribe(
        [
          "overload:quantity:insales:product",
          "unchange_quantity:insales:ui_add-cart-counter",
        ],
        () => {
          let overload_quantity = alertsSettings["overload_quantity"];
          microAlert(replaceAlertWarningIcon(overload_quantity), 5000, {
            modificator: "warning-notice",
          });
        }
      );

      EventBus.subscribe("add_items:insales:cart", function (data) {
        if (data.action.button) {
          let success_cart = alertsSettings["success_cart"];
          let btn_add_cart_counter_attr =
            $(data.action.button).is("[data-add-cart-counter-btn]") ||
            $(data.action.button).is("[data-add-cart-counter]");
          let show_alert_always = $(data.action.button.prevObject).is(
            "[data-show-alert-always]"
          );

          if (
            btn_add_cart_counter_attr &&
            data.action.currentItems &&
            data.action.currentItems.length
          ) {
            let current_id = data.action.currentItems[0].variant_id;
            let first_added = Cart.order.order_lines.filter((i) => {
              return i.variant_id == current_id && i.quantity == 1;
            });

            if (first_added.length || show_alert_always) {
              microAlert(replaceAlertCheckIcon(success_cart), 3000, {
                modificator: "success-notice",
              });
            }
          }
        }
      });

      if (window.location.pathname == "/" && Cookies.get("lite_preorder")) {
        let success_feedback = alertsSettings["success_preorder"];

        microAlert(replaceAlertCheckIcon(success_feedback), 5000, {
          modificator: "success-notice",
        });
        Cookies.remove("lite_preorder");
      }
    } catch (error) {
      console.error(
        'Widget "widget-type_system_widget_v4_alerts" throwed an error: "' +
          error.stack +
          '"'
      );
    }
    try {
      let widget = ".widget-type_system_widget_v4_article_previews_1";
      let $widget = $(".widget-type_system_widget_v4_article_previews_1");
      $(function () {
        $widget.each(function (index, el) {
          new LazyLoad({
            container: $(el).get(0),
            elements_selector: ".lazyload",
          });
        });
      });
    } catch (error) {
      console.error(
        'Widget "widget-type_system_widget_v4_article_previews_1" throwed an error: "' +
          error.stack +
          '"'
      );
    }
    try {
      let widget = ".widget-type_system_widget_v4_banner_list_4";
      let $widget = $(".widget-type_system_widget_v4_banner_list_4");
      $widget.each(function (index, el) {
        new LazyLoad({
          container: $(el).get(0),
          elements_selector: ".lazyload",
        });
      });
    } catch (error) {
      console.error(
        'Widget "widget-type_system_widget_v4_banner_list_4" throwed an error: "' +
          error.stack +
          '"'
      );
    }
    try {
      let widget = ".widget-type_system_widget_v4_callback_modal_1";
      let $widget = $(".widget-type_system_widget_v4_callback_modal_1");
      $(document).ready(function () {
        $(widget)
          .find(".js-hide-modal")
          .on("click", function () {
            $(widget).removeClass("is-show-fullscreen");
          });

        $(widget).on("click", function (event) {
          if ($(event.target).closest(widget + " .layout__content").length) {
            return;
          }

          $(widget).removeClass("is-show-fullscreen");
        });
      });

      EventBus.subscribe("send-feedback:insales:ui_feedback", (data) => {
        data.form.addClass("is-sended");

        setTimeout(function () {
          data.form.removeClass("is-sended");
          $(widget).removeClass("is-show-fullscreen");
        }, 5000);
      });

      EventBus.subscribe("show-modal-feedback:insales:ui_feedback", (data) => {
        if (data.modal_id && data.modal_id == "default") {
          $(widget).addClass("is-show-fullscreen");
        }
      });
    } catch (error) {
      console.error(
        'Widget "widget-type_system_widget_v4_callback_modal_1" throwed an error: "' +
          error.stack +
          '"'
      );
    }
    try {
      let widget = ".widget-type_system_widget_v4_feedback_1";
      let $widget = $(".widget-type_system_widget_v4_feedback_1");
      EventBus.subscribe("send-feedback:insales:ui_feedback", (data) => {
        data.form.addClass("is-sended");

        setTimeout(function () {
          data.form.removeClass("is-sended");
        }, 10000);
      });
    } catch (error) {
      console.error(
        'Widget "widget-type_system_widget_v4_feedback_1" throwed an error: "' +
          error.stack +
          '"'
      );
    }
    try {
      let widget = ".widget-type_system_widget_v4_footer_5";
      let $widget = $(".widget-type_system_widget_v4_footer_5");
      $(widget)
        .find(".js-show-mobile-submenu")
        .on("click", function () {
          $(this).parents(".menu-item:first").toggleClass("is-show-mobile");
        });
    } catch (error) {
      console.error(
        'Widget "widget-type_system_widget_v4_footer_5" throwed an error: "' +
          error.stack +
          '"'
      );
    }
    try {
      let widget = ".widget-type_system_widget_v4_header_3";
      let $widget = $(".widget-type_system_widget_v4_header_3");
      /* eslint-disable linebreak-style */
      var isTouch = !!("ontouchstart" in window || navigator.msMaxTouchPoints);
      var mobilePoint = 768;

      $(function () {
        if (isTouch) {
          $(widget).find(".header").addClass("is-touch");
        }

        if ($(widget).find(".header__collections .is-current").length) {
          if (
            $(window).width() < mobilePoint ||
            $(widget).css("--catalog-location") == "side-panel"
          ) {
            $(widget)
              .find(".header__collections .is-current")
              .addClass("is-show");
          }
        }

        $(".header__collections-item").hover(
          function () {
            let submenu = $(this).find("> .header__collections-submenu");

            if (
              submenu.length &&
              submenu.offset().left + submenu.innerWidth() > $(window).width()
            ) {
              submenu.addClass("is-right");
            }
          },
          function () {
            $(this)
              .find("> .header__collections-submenu")
              .removeClass("is-right");
          }
        );

        $(widget)
          .find(".js-show-touch-submenu")
          .on("click", function () {
            let root_item = $(this).parents(".header__collections-item:last");
            let cur_item = $(this).parents(".header__collections-item:first");
            let submenu = cur_item.find("> .header__collections-submenu");

            if ($(window).width() >= mobilePoint) {
              if ($(this).parents(".cut-list__more-content").length) {
                $(this)
                  .parents(".cut-list__more-content")
                  .find("> .header__collections-item.is-show")
                  .each(function () {
                    if ($(this).is(root_item) == false) {
                      $(this)
                        .removeClass("is-show is-right")
                        .find(".header__collections-item.is-show")
                        .removeClass("is-show is-right");
                    }
                  });
              } else {
                $(widget)
                  .find(
                    ".header__collections > .header__collections-item.is-show"
                  )
                  .each(function () {
                    if ($(this).is(root_item) == false) {
                      $(this)
                        .removeClass("is-show is-right")
                        .find(".header__collections-item.is-show")
                        .removeClass("is-show is-right");
                    }
                  });
              }
            }

            cur_item.toggleClass("is-show");

            if (
              submenu.length &&
              submenu.offset().left + submenu.innerWidth() > $(window).width()
            ) {
              submenu.addClass("is-right");
            }
          });

        $(document).on("click", function (event) {
          if ($(event.target).closest(".header__collections").length) {
            return;
          }

          if (
            $(window).width() >= mobilePoint &&
            $(widget).css("--catalog-location") != "side-panel"
          ) {
            $(widget)
              .find(".header__collections-item")
              .removeClass("is-show is-right");
          }
        });

        $(widget)
          .find(".cut-list__drop-toggle")
          .on("click", function () {
            if ($(window).width() >= mobilePoint) {
              $(widget)
                .find(".header__collections-item")
                .removeClass("is-show is-right");
            }
          });

        $(widget)
          .find(".js-show-search")
          .on("click", function () {
            let window_w = $(window).width();
            let search_block = $(this).parents(".header__search");
            let search_form = search_block.find(".header__search-form");
            let search_field_width = 0;

            if (window_w > 1024) {
              search_field_width =
                window_w - (window_w - $(this).offset().left) * 2;
            } else {
              search_field_width =
                $(widget).find(".header__area-logo").innerWidth() - 20;
            }

            if (search_block.is(".is-show")) {
              search_block.removeClass("is-show");
              $(widget).find(".header__logo").removeClass("is-hide");
            } else {
              search_form.css("width", search_field_width);
              $(widget).find(".header__logo").addClass("is-hide");
              search_block.addClass("is-show");

              setTimeout(function () {
                search_block.find(".header__search-field").focus();
              }, 50);
            }
          });

        $(widget)
          .find(".js-show-side-panel")
          .on("click", function () {
            $(widget).find(".header-overlay").addClass("is-show");
            $(widget).find(".side-panel").addClass("is-show");
            $(widget).find(".side-panel").css("visibility", "");
          });

        $(widget)
          .find(".js-hide-side-panel")
          .on("click", function () {
            $(widget).find(".header-overlay").removeClass("is-show");
            $(widget).find(".side-panel").removeClass("is-show");
          });

        $(widget)
          .find(".js-toggle-languages-list")
          .on("click", function () {
            $(this).parents(".header__languages").toggleClass("is-show");
          });

        if ($(window).width() >= mobilePoint) {
          $(widget).find(".js-cut-list-collections").cutList({
            moreBtnTitle: '<span class="icon icon-ellipsis-h"></span>',
            showMoreOnHover: true,
          });
        }
      });

      $(window).on("load", function () {
        $(widget).find(".js-cut-list-collections").resize();
        $(widget).find(".side-panel").css("visibility", "");
      });

      $(window).on("resize", function () {
        // Для touch-устройств resize срабатывает при появление клавиатуры
        if (!isTouch) {
          $(widget).find(".header__search").removeClass("is-show");
          $(widget).find(".header__logo").removeClass("is-hide");
        }
      });

      EventBus.subscribe(
        [
          "widget:input-setting:insales:system:editor",
          "widget:change-setting:insales:system:editor",
        ],
        () => {
          $(widget).find(".js-cut-list-collections").resize();
          $(widget).find(".header__search").removeClass("is-show");
          $(widget).find(".header__logo").removeClass("is-hide");
        }
      );
    } catch (error) {
      console.error(
        'Widget "widget-type_system_widget_v4_header_3" throwed an error: "' +
          error.stack +
          '"'
      );
    }
    try {
      let widget = ".widget-type_system_widget_v4_instagram_1";
      let $widget = $(".widget-type_system_widget_v4_instagram_1");
      $(function () {
        $widget.each(function (index, el) {
          new LazyLoad({
            container: $(el).get(0),
            elements_selector: ".lazyload",
          });
        });
      });
    } catch (error) {
      console.error(
        'Widget "widget-type_system_widget_v4_instagram_1" throwed an error: "' +
          error.stack +
          '"'
      );
    }
    try {
      let widget = ".widget-type_system_widget_v4_modal_cookie_1";
      let $widget = $(".widget-type_system_widget_v4_modal_cookie_1");
      $widget.ready(function () {
        if ($widget.find(".cookie-banner").length) {
          if (!Cookies.get("was")) {
            $widget.addClass("is-show-fullscreen");
          }

          $(".js-cookies-button").on("click", function () {
            $widget.removeClass("is-show-fullscreen");
            Cookies.set("was", true, {
              expires: 365,
              path: "/",
            });
          });
        }
      });
    } catch (error) {
      console.error(
        'Widget "widget-type_system_widget_v4_modal_cookie_1" throwed an error: "' +
          error.stack +
          '"'
      );
    }
    try {
      let widget = ".widget-type_system_widget_v4_notification_add_to_cart_1";
      let $widget = $(
        ".widget-type_system_widget_v4_notification_add_to_cart_1"
      );
      EventBus.subscribe("add_items:insales:cart", function (data) {
        if (data.action.button) {
          var btn_add_cart_counter_attr = $(data.action.button[0]).attr(
            "data-add-cart-counter"
          );

          if (
            typeof btn_add_cart_counter_attr === typeof undefined &&
            data.action.currentItems &&
            data.action.currentItems.length
          ) {
            var photo_area = $(widget).find(".notification-product__photo");
            var title_area = $(widget).find(".notification-product__title");
            var price_area = $(widget).find(".notification-product__price");
            var count_area = $(widget).find(".notification-product__count");

            photo_area.find("img").remove();
            title_area.text("");
            price_area.text("");
            count_area.text("");

            var product_info = data.action.currentItems[0];
            var variant_id = product_info.variant_id;
            var count = data.action.items[variant_id] || 1;

            $(
              '<img src="' + product_info.first_image.medium_url + '"/>'
            ).appendTo($(widget).find(".notification-product__photo"));
            $(widget)
              .find(".notification-product__title")
              .html(product_info.title);
            $(widget)
              .find(".notification-product__price")
              .html(Shop.money.format(product_info.sale_price));
            $(widget)
              .find(".notification-product__count")
              .text(
                count +
                  " " +
                  Shop.units.getName(product_info.product.unit) +
                  "."
              );

            $(widget).addClass("is-show-fullscreen");
          }
        }
      });

      $(document).ready(function () {
        $(widget)
          .find(".js-hide-notification")
          .on("click", function () {
            $(widget).removeClass("is-show-fullscreen");
          });

        $(widget).on("click", function (event) {
          if ($(event.target).closest(widget + " .layout__content").length) {
            return;
          }

          $(widget).removeClass("is-show-fullscreen");
        });
      });
    } catch (error) {
      console.error(
        'Widget "widget-type_system_widget_v4_notification_add_to_cart_1" throwed an error: "' +
          error.stack +
          '"'
      );
    }
    try {
      let widget = ".widget-type_system_widget_v4_preorder_1";
      let $widget = $(".widget-type_system_widget_v4_preorder_1");
      $(function () {
        EventBus.subscribe("show-preorder:insales:ui_product", (data) => {
          let content_field = $(widget).find('[name="content"]');
          let product_label = content_field.data("preorderProductLabel");
          let variant_label = content_field.data("preorderVariantLabel");

          let product_info = product_label + data.product;

          if (data.variant) {
            product_info += "<br/>" + variant_label + data.variant;
          }

          $(widget).find('[name="content"]').val(product_info);
          $(widget).addClass("is-show-fullscreen");
        });

        $(document).ready(function () {
          $(widget)
            .find(".js-hide-preorder")
            .on("click", function () {
              $(widget).removeClass("is-show-fullscreen");
            });

          $(widget).on("click", function (event) {
            if ($(event.target).closest(widget + " .layout__content").length) {
              return;
            }

            $(widget).removeClass("is-show-fullscreen");
          });
        });

        EventBus.subscribe("send-feedback:insales:ui_feedback", (data) => {
          data.form.addClass("is-sended");

          setTimeout(function () {
            data.form.removeClass("is-sended");
            $(widget).removeClass("is-show-fullscreen");
          }, 5000);
        });
      });
    } catch (error) {
      console.error(
        'Widget "widget-type_system_widget_v4_preorder_1" throwed an error: "' +
          error.stack +
          '"'
      );
    }
    try {
      let widget = ".widget-type_system_widget_v4_promo_slider_2";
      let $widget = $(".widget-type_system_widget_v4_promo_slider_2");
      $(function () {
        $widget.each(function (index, el) {
          new LazyLoad({
            container: $(el).get(0),
            elements_selector: ".lazyload",
          });
        });

        $widget.find(".js-promo-slider").each(function () {
          initPromoSlider($(this));
        });
      });

      function initPromoSlider(slider) {
        let is_autoplay = slider.data("autoplay");
        let autoplay_delay = slider.data("autoplayDelay");

        slider[0].splide = new Splide(slider[0], {
          rewind: true,
          autoplay: !!is_autoplay,
          interval: autoplay_delay ? parseInt(autoplay_delay) * 1000 : 5000,
        });

        slider[0].splide.on("mounted updated", function () {
          displaySliderControls(slider);
        });

        slider[0].splide.mount();
      }

      $(function () {
        EventBus.subscribe(
          [
            "widget:input-setting:insales:system:editor",
            "widget:change-setting:insales:system:editor",
          ],
          (data) => {
            $widget.each(function (index, el) {
              if (
                data.widget_id ==
                $(el).parents(".editable-widget").data("widgetId")
              ) {
                let widget_slider_node = $(
                  '[data-widget-id="' + data.widget_id + '"] .js-promo-slider'
                );

                if (widget_slider_node.length) {
                  updatePromoSlider(widget_slider_node, data);
                }
              }
            });
          }
        );
      });

      function updatePromoSlider(slider, data) {
        let sliderInst = slider[0].splide;

        if (data.setting_name == "autoplay") {
          slider.data("autoplay", data.value);

          sliderInst.destroy();
          initPromoSlider(slider);
        } else if (data.setting_name == "autoplay-delay") {
          slider.data("autoplayDelay", data.value);

          sliderInst.destroy();
          initPromoSlider(slider);
        } else {
          setTimeout(function () {
            sliderInst.refresh();
          }, 0);
        }
      }

      function displaySliderControls(slider) {
        let sliderInst = slider[0].splide;

        if (sliderInst.length <= sliderInst.options.perPage) {
          slider.addClass("is-hide-controls");
        } else {
          slider.removeClass("is-hide-controls");
        }
      }
    } catch (error) {
      console.error(
        'Widget "widget-type_system_widget_v4_promo_slider_2" throwed an error: "' +
          error.stack +
          '"'
      );
    }
    try {
      let widget = ".widget-type_system_widget_v4_special_products_2";
      let $widget = $(".widget-type_system_widget_v4_special_products_2");
      $(function () {
        var mobile_point = 767;
        var isTouch = !!(
          "ontouchstart" in window || navigator.msMaxTouchPoints
        );

        if (isTouch) {
          $(widget).find(".product-preview").addClass("is-touch");
        }

        $widget.each(function (index, el) {
          new LazyLoad({
            container: $(el).get(0),
            elements_selector: ".lazyload",
          });
        });

        $(document).ready(function () {
          let specialProducts = $widget.find(".js-special-products");

          specialProducts.each(function () {
            let special_products_block = $(this);
            let slider_block = special_products_block.find(
              ".js-special-products-slider"
            );
            let slide_min_width = 220;
            let slide_min_width_mobile = 160;
            let slide_gap = 30;

            if (slider_block.is("[data-slide-min-width]")) {
              slide_min_width = parseInt(slider_block.data("slideMinWidth"));
            } else {
              slider_block.data("slideMinWidth", slide_min_width);
            }

            if (slider_block.is("[data-slide-min-width-mobile]")) {
              slide_min_width_mobile = parseInt(
                slider_block.data("slideMinWidthMobile")
              );
            } else {
              slider_block.data("slideMinWidthMobile", slide_min_width_mobile);
            }

            if (slider_block.is("[data-slide-gap]")) {
              slide_gap = parseInt(slider_block.data("slideGap"));
            } else {
              slider_block.data("slideGap", slide_gap);
            }

            slider_block[0].splide = new Splide(slider_block[0], {
              perPage: getSlidesPerView(
                slider_block,
                isMobileWidth() ? slide_min_width_mobile : slide_min_width,
                slide_gap
              ),
              gap: slide_gap,
              perMove: 1,
            });

            $(window).on("resize", function () {
              let slide_min_width = parseInt(
                slider_block[0].dataset.slideMinWidth
              );
              let slide_min_width_mobile = parseInt(
                slider_block[0].dataset.slideMinWidthMobile
              );
              let slide_gap = parseInt(slider_block[0].dataset.slideGap);

              slider_block[0].splide.options = {
                perPage: getSlidesPerView(
                  slider_block,
                  isMobileWidth() ? slide_min_width_mobile : slide_min_width,
                  slide_gap
                ),
              };
              configureDragOption(slider_block);
            });

            slider_block[0].splide.on("arrows:updated", function () {
              let special_products = slider_block.parents(
                ".js-special-products"
              );
              let prev_btn = special_products.find(
                ".special-products__slider-arrow-prev"
              );
              let next_btn = special_products.find(
                ".special-products__slider-arrow-next"
              );

              if (
                special_products
                  .find(".splide__arrow--prev")
                  .prop("disabled") === true
              ) {
                prev_btn.addClass("is-disabled");
              } else {
                prev_btn.removeClass("is-disabled");
              }

              if (
                special_products
                  .find(".splide__arrow--next")
                  .prop("disabled") === true
              ) {
                next_btn.addClass("is-disabled");
              } else {
                next_btn.removeClass("is-disabled");
              }
            });

            slider_block[0].splide.on("mounted updated", function () {
              displaySliderControls(slider_block);
            });

            slider_block[0].splide.on("mounted", function () {
              configureDragOption(slider_block);
            });

            slider_block[0].splide.mount();

            $widget.find(".js-move-slide").on("click", function () {
              let slider_node = $(this)
                .parents(".js-special-products")
                .find(".js-special-products-slider");

              if (slider_node.length) {
                let sliderInst = slider_node[0].splide;

                if ($(this).is(".special-products__slider-arrow-prev")) {
                  sliderInst.go("-");
                }

                if ($(this).is(".special-products__slider-arrow-next")) {
                  sliderInst.go("+");
                }
              }
            });
          });
        });

        $(function () {
          EventBus.subscribe(
            [
              "widget:input-setting:insales:system:editor",
              "widget:change-setting:insales:system:editor",
            ],
            (data) => {
              $widget.each(function (index, el) {
                if (
                  data.widget_id ==
                  $(el).parents(".editable-widget").data("widgetId")
                ) {
                  let widget_slider_node = $(
                    '[data-widget-id="' +
                      data.widget_id +
                      '"] .js-special-products-slider'
                  );

                  if (widget_slider_node.length) {
                    widget_slider_node.each(function () {
                      updateSpecialProductSlider($(this), data);
                    });
                  }
                }
              });
            }
          );
        });

        function updateSpecialProductSlider(slider, data) {
          let sliderInst = slider[0].splide;

          let slide_min_width = parseInt(slider.data("slideMinWidth"));
          let slide_min_width_mobile = parseInt(
            slider.data("slideMinWidthMobile")
          );
          let slide_gap = parseInt(slider.data("slideGap"));

          if (data.setting_name == "slide-width") {
            let new_slide_min_width = parseInt(data.value);
            slider.attr("data-slide-min-width", new_slide_min_width);

            if (!isMobileWidth()) {
              let new_per_page = getSlidesPerView(
                slider,
                new_slide_min_width,
                slide_gap
              );
              sliderInst.options = { perPage: new_per_page };
            }
          } else if (data.setting_name == "slide-width-mobile") {
            let new_slide_min_width_mobile = parseInt(data.value);
            slider.attr(
              "data-slide-min-width-mobile",
              new_slide_min_width_mobile
            );

            if (isMobileWidth()) {
              let new_per_page = getSlidesPerView(
                slider,
                new_slide_min_width_mobile,
                slide_gap
              );
              sliderInst.options = { perPage: new_per_page };
            }
          } else if (data.setting_name == "slide-gap") {
            let new_slide_gap = parseInt(data.value);
            let new_per_page = getSlidesPerView(
              slider,
              slide_min_width,
              new_slide_gap
            );
            slider.attr("data-slide-gap", new_slide_gap);

            sliderInst.options = { gap: new_slide_gap, perPage: new_per_page };
          } else {
            setTimeout(function () {
              let new_per_page = getSlidesPerView(
                slider,
                isMobileWidth() ? slide_min_width_mobile : slide_min_width,
                slide_gap
              );
              sliderInst.options = { perPage: new_per_page };
            }, 0);
          }

          configureDragOption(slider);
        }

        function getSlidesPerView(sliderBlock, slideMinWidth, slideGap) {
          return Math.floor(
            (sliderBlock.width() + slideGap) / (slideMinWidth + slideGap)
          );
        }

        function displaySliderControls(slider) {
          let sliderInst = slider[0].splide;
          let special_products = slider.parents(".js-special-products");
          let prev_btn = special_products.find(
            ".special-products__slider-arrow-prev"
          );
          let next_btn = special_products.find(
            ".special-products__slider-arrow-next"
          );

          if (sliderInst.length <= sliderInst.options.perPage) {
            prev_btn.addClass("is-hide");
            next_btn.addClass("is-hide");
            slider.addClass("is-hide-paging");
          } else {
            prev_btn.removeClass("is-hide");
            next_btn.removeClass("is-hide");
            slider.removeClass("is-hide-paging");
          }
        }

        function configureDragOption(slider) {
          if (slider[0].splide.length <= slider[0].splide.options.perPage) {
            slider[0].splide.options = { drag: false };
          } else {
            slider[0].splide.options = { drag: true };
          }
        }

        function isMobileWidth() {
          return $(window).width() <= mobile_point;
        }
      });
    } catch (error) {
      console.error(
        'Widget "widget-type_system_widget_v4_special_products_2" throwed an error: "' +
          error.stack +
          '"'
      );
    }
    try {
      let widget = ".widget-type_system_widget_v4_page_banner_2";
      let $widget = $(".widget-type_system_widget_v4_page_banner_2");
      $widget.each(function (index, el) {
        new LazyLoad({
          container: $(el).get(0),
          elements_selector: ".lazyload",
        });
      });
    } catch (error) {
      console.error(
        'Widget "widget-type_system_widget_v4_page_banner_2" throwed an error: "' +
          error.stack +
          '"'
      );
    }
    try {
      let widget = ".widget-type_system_widget_v4_page_banner_1";
      let $widget = $(".widget-type_system_widget_v4_page_banner_1");
      $widget.each(function (index, el) {
        new LazyLoad({
          container: $(el).get(0),
          elements_selector: ".lazyload",
        });
      });
    } catch (error) {
      console.error(
        'Widget "widget-type_system_widget_v4_page_banner_1" throwed an error: "' +
          error.stack +
          '"'
      );
    }
    try {
      let widget = ".widget-type_system_widget_v4_button_on_top_1";
      let $widget = $(".widget-type_system_widget_v4_button_on_top_1");
      let scroll_timeout;

      $widget.find(".js-go-top-page").on("click", function () {
        $("html, body").animate({ scrollTop: 0 }, 500);
        return false;
      });

      $(window).on("scroll", function () {
        clearTimeout(scroll_timeout);
        scroll_timeout = setTimeout(function () {
          showButtonOnTop($widget.find(".js-go-top-page"));
        }, 50);
      });

      function showButtonOnTop(btn) {
        if ($(window).scrollTop() >= $(window).height()) {
          btn.addClass("is-show");
        } else {
          btn.removeClass("is-show");
        }
      }

      $(function () {
        EventBus.subscribe(
          [
            "widget:input-setting:insales:system:editor",
            "widget:change-setting:insales:system:editor",
          ],
          (data) => {
            if (data.setting_name == "icon-view") {
              let btn = $(
                '[data-widget-id="' + data.widget_id + '"] .js-go-top-page'
              );
              btn.find("> span").removeClass().addClass(data.value);
            }
          }
        );
      });
    } catch (error) {
      console.error(
        'Widget "widget-type_system_widget_v4_button_on_top_1" throwed an error: "' +
          error.stack +
          '"'
      );
    }
  