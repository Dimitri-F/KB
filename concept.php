<?php

require_once __DIR__ . '/includes/config.php';

$title = "Notre concept | Food Truck Produits Locaux Pays Bigouden";

$description = "Découvrez le concept de Kreizenn Blaz : des menus préparés avec des produits locaux et de saison dans le Pays Bigouden.";

include_once __DIR__ . '/includes/head.php';

include_once __DIR__ . '/includes/header.php';

?>

<section class="concept-hero">

  <img src="<?= BASE_URL ?>/assets/photos/photo-page-concept.webp" alt="">

  <div class="hero-overlay"></div>

  <div class="hero-content">

    <h1>
      KB – Le cœur du goût
    </h1>
    <p>
      Avant tout une histoire de passion, de partage et de famille.
    </p>

  </div>

</section>

<section>

  <div class="container story">

    <div class="story-text">

      <div class="section-label">Concept</div>

      <div class="parallax-title">
        <h2>
          Un food-truck version cheffe
        </h2>

        <p class="parallax-text">
          Une aventure née d'une envie simple, proposer une cuisine sincère, gourmande et accessible, le projet prend racine en Bretagne, au cœur du Pays Bigouden.
        </p>

        <p class="parallax-text">
          Derrière ce food truck se cache une conviction forte: les meilleurs moments se vivent souvent autour d'une bonne table, d'un repas partagé et de produits travaillés avec respect.
        </p>
      </div>


      <div class="section-label">Marie la cheffe</div>

      <p>
        Aux commandes, Marie, cheffe passionnée depuis plus de dix ans. Au fil de son
        parcours, elle a développé une cuisine qui lui ressemble: généreuse, créative et
        ouverte sur le monde. Ses voyages, ses rencontres et ses expériences ont nourri
        son inspiration tout en renforçant son attachement aux produits locaux et aux
        savoir-faire de son territoire.
      </p>

    </div>

    <div class="story-image">
      <img src="<?= BASE_URL ?>assets/photos/photo-page-concept-2.webp" alt="Produits KB">
    </div>

  </div>




  <div class="container story story-second">

    <div class="story-image">
      <img src="<?= BASE_URL ?>/assets/photos/photo-page-concept-3.webp" alt="Produits KB">
    </div>

    <div class="story-text">

      <p>
        Le nom KB est bien plus qu'un simple logo. Il fait référence à "Kreizenn Blaz", qui
        signifie "Le cœur du goût" en breton, mais représente également une aventure
        profondément familiale.
      </p>

      <p>
        Derrière chaque service, chaque recette et chaque
        événement se trouvent des proches qui participent au projet, le soutiennent et
        contribuent à le faire grandir jour après jour.
      </p>

    </div>

  </div>

</section>

<section class="quote-section">

  <div class="container">

    <blockquote>
      « Plus qu'un food truck, KB est une invitation à prendre le temps. »
    </blockquote>

  </div>

</section>



<div class="container">
  <div class="immersive-content">
    <p>
      Notre food truck, une Tiny House sur roues, a été imaginé comme un lieu de
      rencontre et de convivialité. Un endroit où l'on vient autant pour bien manger que
      pour partager un moment agréable. Ici, la cuisine évolue au rythme des saisons, des
      arrivages et de l'inspiration de la cheffe, toujours avec la volonté de valoriser les
      producteurs locaux et les richesses de notre territoire.
    </p>
    <p>
      Plus qu'un food truck, KB est une invitation à prendre le temps. Le temps de
      découvrir, de savourer et de partager ensemble un moment authentique autour du
      goût.
    </p>
  </div>

  <div class="immersive-overlay">
    <img src="assets/photos/photo-page-concept-4.webp" alt="">
  </div>

</div>




<section class="concept-cta">

  <div class="container ">

    <h3>
      Vous souhaiter en savoir plus?
    </h3>

    <div class="hero-buttons">
      <a href="<?= BASE_URL ?>/carte" class="btn-primary">Voir le menu</a>
      <a href="<?= BASE_URL ?>/emplacements" class="btn-secondary">Nous trouver</a>
      <a href="<?= BASE_URL ?>/contact" class="btn-secondary">Nous contacter</a>
    </div>

  </div>

</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>