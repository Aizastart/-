<?php require_once './function/connect.php';?>
<?php
$sto = $pdo->prepare("SELECT * From stock");
$sto->execute();

$stocks=$sto->fetchAll(PDO::FETCH_OBJ);
?>
<div class="layout__content">
            <div class="h2 article-list__title heading">Акции</div>

            <div class="article-list grid-list">
            <?php foreach($stocks as $stock):  ?>
              <div class="article-list__item">
                <div class="img-ratio img-ratio_cover article-list__item-photo">
                  <div class="img-ratio__inner">
                    <a href="#">
                      <picture>
                        

                        <img
                          data-src="img/<?php echo $stock->filename?>"
                          class="lazyload"
                          alt="Распродажа костюмов на хэллоуин"
                        />
                      </picture>
                    </a>
                  </div>
                </div>
                <div class="article-list__item-title">
                  <a href="#"
                    ><?php echo $stock->name?></a
                  >
                </div>

                <div class="article-list__item-description">
                <?php echo $stock->description?>
                </div>

                <div class="article-list__item-date"><?php echo $stock->date ?></div>
              </div>
              <?php endforeach?>
              

              

             
            </div>
          </div>