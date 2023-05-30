<?php require_once './function/connect.php';?>
<?php
$sql = $pdo->prepare("SELECT * From statbaner");
$sql->execute();
$res=$sql->fetch(PDO::FETCH_ASSOC);
?>
<div class="layout__content">

            <div class="banner-list__item">
              <div class="banner-list__item-text">
                <div class="banner-list__item-title h2">
                  <?php echo $res['name']?>
                  
                </div>
                <div class="banner-list__item-content">
                  <p>
                    
                      
                      <?php echo $res["description"]?>
                    
                  </p>
                </div>

                <div class="banner-list__item-button">
                  <a
                    href=""
                    class="button button_size-m"
                    >Подробнее</a
                  >
                </div>
              </div>

              <div class="banner-list__item-image">
                <div class="img-ratio">
                  <div class="img-ratio__inner">
                    <picture>
                      <source
                        media="(min-width:769px)"
                        data-srcset="https://pr1.zoon.ru/I-gASwHoP-ZLswsSOTL2XA/537x240,q85/4px-BW84_n3F6BrfPOVI0Zu_rXyz1dd-saqEk1wkS4B8mwQgYSRv5aA6KO7YNk1NsxMmli3GLrlxQz4EiWkAC5GJC1M2tonQ"
                        type="image/webp"
                        class="lazyload"
                      />
                      <source
                        media="(max-width:480px)"
                        data-srcset="https://pr1.zoon.ru/I-gASwHoP-ZLswsSOTL2XA/537x240,q85/4px-BW84_n3F6BrfPOVI0Zu_rXyz1dd-saqEk1wkS4B8mwQgYSRv5aA6KO7YNk1NsxMmli3GLrlxQz4EiWkAC5GJC1M2tonQ"
                        type="image/webp"
                        class="lazyload"
                      />
                      <source
                        media="(max-width:768px)"
                        data-srcset="https://static.insales-cdn.com/r/KA2a4QRX0IU/rs:fit:768:0:1/q:100/plain/files/1/209/14926033/original/%D0%A4%D0%BE%D1%82%D0%BE__11_.jpg@webp"
                        type="image/webp"
                        class="lazyload"
                      />

                      <img
                        data-src="img/<?php echo $res["filename"]?>"
                        class="lazyload"
                      />
                    </picture>
                  </div>
                </div>
              </div>
            </div>
            
          </div>