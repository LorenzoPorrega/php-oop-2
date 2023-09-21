<!--
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L’e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria 
ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
-->

<?php
  require_once __DIR__ . '/models/Food.php';
  require_once __DIR__ . '/models/Toy.php';
  require_once __DIR__ . '/models/Doghouse.php';
  require_once __DIR__ . '/models/Dog.php';
  require_once __DIR__ . '/models/Cat.php';
  require_once __DIR__ . '/db/dbProducts.php';
  
?>

<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArkaMoon</title>
    <!-- CUSTOM STYLE SHEET FILE LINK -->
    <!--<link rel="stylesheet" href="./css/style.css">-->
    
    <!-- THIRD PARTY LIBRARIES -->
    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- FONTAWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- STANDARD FAVICON TO AVOID CONSOLE ERRORS ON FIREFOX -->
    <link rel="icon"type="image/x-icon" href="https://www.arcaplanet.it/favicon-32x32.png?v=37b2a8713ab510b3bd7dd228c20f1b3a">
    <!-- VUE CDN -->
    <!--<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>-->
    <!-- LUXON CDN -->
    <script src="https://cdn.jsdelivr.net/npm/luxon@3.3.0/build/global/luxon.min.js"></script>
    <!-- AXIOS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  </head>
  <body>
    <div class="container text-center mt-5">
      <div class="row">
        <?php 
        foreach ($dbProducts as $singleProduct){
        ?>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
            <div class="card position-relative pt-3 h-100 user-select-none" style="width: 18rem;" role="button">
              <img src="<?php echo ($singleProduct->getImg())?>" class="card-img-top px-2" alt="<?php echo ($singleProduct->getName())?>">
              <div class="card-body p-0 mt-3">
                <h5 class="card-title fw-bold w-100 border-top pt-2"><?php echo ($singleProduct->getName())?></h5>
                <p class="card-text px-3 fw-bold">€<?php echo ($singleProduct->getPrice())?></p>
                <p class="card-text px-3 pb-2"><?php echo ($singleProduct->getDescription())?></p>
              </div>
              <?php if($singleProduct->getCategory() === "cane"){
                $specie = new Dog("cane", 12, true); ?>
                <div class="position-absolute" style="left: 6px; top: 6px;"><a href="#0" class="text-black"><?php echo $specie->getIcon() ?></a></div>
              <?php }
              elseif($singleProduct->getCategory() === "gatto"){
                $specie = new Cat("gatto", 12, true); ?>
                <div class="position-absolute" style="left: 6px; top: 6px;"><a href="#0" class="text-black"><?php echo $specie->getIcon() ?></a></div>
              <?php } ?>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </body>
  <script src="./js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>