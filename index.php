<?php

require_once __DIR__ . '/includes/config.php';

$title = "Food Truck Pays Bigouden | Cuisine nomade bistronomique - Kreizenn Blaz";

$description = "Kreizenn Blaz est un food truck installé dans le Pays Bigouden. Retrouvez-nous à Lesconil et dans les communes voisines.";

include_once __DIR__ . '/includes/head.php';

include_once __DIR__ . '/includes/header.php';

?>

<section class="hero">

  <img src="<?= BASE_URL ?>/assets/photos/photo-accueil.webp" alt="">

  <div class="overlay"></div>

  <div class="hero-content">

    <h1>KB - Le coeur du goût</h1>

    <p>
      Un food truck version cheffe
    </p>

    <div class="hero-buttons">
      <a href="<?= BASE_URL ?>/carte" class="btn-primary">Voir le menu</a>
      <a href="<?= BASE_URL ?>/emplacements" class="btn-secondary">Nous trouver</a>
    </div>

  </div>

</section>

<section class="quick-info-section">

  <div class="container">

    <div class="quick-grid">
      <a href="<?= BASE_URL ?>/emplacements">
        <div class=" quick-card">
          <img src="<?= BASE_URL ?>/assets/photos/photo-emplacement.webp" alt="Emplacements food">
          <div class="quick-card-content">
            <h3>Nos emplacements</h3>
            <p>Retrouvez-nous selon les jours sur nos différents emplacements et venez partager un moment gourmand
              autour d'une cuisine fraîche, locale et de saison.
            </p>
          </div>
        </div>
      </a>

      <a href="<?= BASE_URL ?>/carte">
        <div class="quick-card">
          <img src="<?= BASE_URL ?>/assets/photos/photo-notre-carte.webp" alt="Menu KB">
          <div class="quick-card-content">
            <h3>Notre carte</h3>
            <p>
              Une carte vivante, locale et pensée au rythme des saisons, pour vous offrir chaque jour le meilleur des
              produits du moment.
            </p>
          </div>
        </div>
      </a>

      <a href="<?= BASE_URL ?>/horaires">
        <div class="quick-card">
          <img src="<?= BASE_URL ?>/assets/photos/photo-horaire.png" alt="Horaires KB">
          <div class="quick-card-content">
            <h3>Nos horaires</h3>
            <p>
              Retrouvez nos jours et horaires de présence selon nos emplacements.
            </p>
          </div>
        </div>
      </a>

    </div>

  </div>

</section>

<section>

  <div class="container story">

    <div class="story-text">

      <div class="section-label">Concept</div>

      <h2>
        Une cuisine mobile, locale et créative.
      </h2>

      <p>
        Notre cuisine repose sur une idée simple : travailler des produits frais, locaux et de saison pour proposer
        des plats gourmands, accessibles et inspirés. À travers une approche bistronomique et une carte qui évolue au
        fil des arrivages, nous mettons à l'honneur le savoir-faire de nos producteurs tout en laissant une place à la
        découverte et aux influences venues d'ailleurs.
      </p>

      <p>
        Derrière les fourneaux, Marie, cheffe passionnée et forte de plus de 10 ans d'expérience, imagine une cuisine
        sincère et généreuse, nourrie par son parcours professionnel, ses voyages et ses rencontres culinaires.
      </p>

      <p>
        Plus qu'un simple repas, nous souhaitons offrir un moment de partage, de convivialité et de plaisir autour du
        goût.
      </p>

      <div class="hero-buttons">
        <a href="<?= BASE_URL ?>/concept" class="btn-primary">En savoir plus</a>
      </div>


    </div>

    <div class="story-image">
      <img src="<?= BASE_URL ?>/assets/photos/photo-concept-accueil.webp" alt="Produits KB">
    </div>

  </div>

</section>

<!-- <section> -->
<section>
  <div class="container">

    <div class="section-label">Galerie</div>

    <h2 class="section-title">
      Instants partagés.
    </h2>

    <div class="gallery-wrapper">

      <button class="gallery-btn prev" aria-label="Précédent">

        <svg viewBox="0 0 24 24" fill="none">
          <path d="M15 6L9 12L15 18" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
            stroke-linejoin="round" />
        </svg>

      </button>

      <div class="gallery-carousel">

        <div class="gallery-slide">
          <img src="<?= BASE_URL ?>/assets/photos/photo-galerie-1.webp" alt="">
        </div>

        <div class="gallery-slide">
          <img src="<?= BASE_URL ?>/assets/photos/photo-galerie-2.webp" alt="">
        </div>

        <div class="gallery-slide">
          <img src="<?= BASE_URL ?>/assets/photos/photo-galerie-3.webp" alt="">
        </div>

        <div class="gallery-slide">
          <img src="<?= BASE_URL ?>/assets/photos/photo-galerie-4.webp" alt="">
        </div>

        <div class="gallery-slide">
          <img src="<?= BASE_URL ?>/assets/photos/photo-galerie-5.webp" alt="">
        </div>

        <div class="gallery-slide">
          <img src="<?= BASE_URL ?>/assets/photos/photo-galerie-6.webp" alt="">
        </div>

        <div class="gallery-slide">
          <img src="<?= BASE_URL ?>/assets/photos/photo-galerie-7.webp" alt="">
        </div>

        <div class="gallery-slide">
          <img src="<?= BASE_URL ?>/assets/photos/photo-galerie-8.webp" alt="">
        </div>

        <div class="gallery-slide">
          <img src="<?= BASE_URL ?>/assets/photos/photo-galerie-9.webp" alt="">
        </div>

        <div class="gallery-slide">
          <img src="<?= BASE_URL ?>/assets/photos/photo-galerie-10.webp" alt="">
        </div>

      </div>

      <button class="gallery-btn next" aria-label="Suivant">

        <svg viewBox="0 0 24 24" fill="none">
          <path d="M9 6L15 12L9 18" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
            stroke-linejoin="round" />
        </svg>

      </button>

    </div>

  </div>

</section>

<section>

  <div class="container">

    <div class="private">

      <img src="<?= BASE_URL ?>/assets/photos/photo-privatisation.webp" alt="Privatisation KB">

      <div class="private-overlay">

      </div>

      <div class="private-content">

        <div class="private-inner">

          <h2>
            Une expérience conviviale pour vos événements privés.
          </h2>

          <p>
            Mariages, événements d’entreprise, anniversaires ou soirées privées.
          </p>

          <br>

          <a href="<?= BASE_URL ?>/privatisation" class="btn-primary">
            Nous contacter
          </a>

        </div>

      </div>

    </div>

  </div>

</section>

<section>

  <div class="container reassurance">

    <div class="section-label">Engagements</div>

    <h2 class="section-title">
      Une cuisine responsable et locale
    </h2>

    <div class="container story">

      <div class="story-text">

        <p>
          Parce qu'une cuisine de qualité commence par de bons produits, nous travaillons
          en priorité avec des producteurs et artisans locaux qui partagent nos valeurs de
          qualité, de proximité et de respect des saisons.
        </p>

        <p>
          Au fil des saisons et des disponibilités, nous sélectionnons avec soin des produits
          issus de notre territoire afin de vous proposer une cuisine fraîche, authentique et
          toujours inspirée.
        </p>

      </div>

      <div class="reassurance-image">
        <img src="<?= BASE_URL ?>/assets/photos/fournisseurs.png" alt="">
      </div>
      <h3>Nos fournisseurs</h3>
    </div>


    <div class="reassurance-grid">



      <div class="reassurance-card">
        <h4>Fruits et légumes</h4>
        <p>
        <ul>
          <li><span class="nom-fournisseur">La Ferme de Kerogant </span> – Loctudy</li>
          <li><span class="nom-fournisseur">La Ferme de Kerdrein</span> – Plonéis</li>
          <li><span class="nom-fournisseur">Les Légumes de Tokio</span> – Plobannalec-Lesconil (légumes et produits
            d'inspiration asiatique)</li>
        </ul>
        </p>
      </div>

      <div class="reassurance-card">
        <h4>Produits de la mer</h4>
        <p>
        <ul>
          <li><span class="nom-fournisseur">L'Océan Bleu Poissonnerie</span> – Loctudy</li>
          <li><span class="nom-fournisseur">Scarlette Le Corre</span> – Guilvinec (algues alimentaires)</li>
        </ul>
        </p>
      </div>

      <div class="reassurance-card">
        <h4>Viandes</h4>
        <p>
        <ul>
          <li><span class="nom-fournisseur">Ferme de Kerotret</span></li>
          <li><span class="nom-fournisseur">Fourche à la Fourchette</span> – Pont-l'Abbé</li>
        </ul>
        </p>
      </div>

      <div class="reassurance-card">
        <h4>Herbes aromatiques</h4>
        <p>
        <ul>
          <li><span class="nom-fournisseur">Ty Tropik</span> – Plomeur</li>
        </ul>
        </p>
      </div>

      <div class="reassurance-card">
        <h4>Pain et boulangerie</h4>
        <p>
        <ul>
          <li><span class="nom-fournisseur">Les Copains</span> – Lesconil</li>
        </ul>
        </p>
      </div>

      <div class="reassurance-card">
        <h4>Boissons</h4>
        <p>
        <ul>
          <li><span class="nom-fournisseur">OK Kombucha</span> – Plonéour-Lanvern</li>
        </ul>
        </p>
      </div>

      <div class="reassurance-card">
        <h4>Cidre</h4>
        <p>
        <ul>
          <li><span class="nom-fournisseur">Cidrerie Kerné</span> – Pouldreuzic</li>
        </ul>
        </p>
      </div>

      <div class="reassurance-card">
        <h4>Vins et bières</h4>
        <p>
        <ul>
          <li><span class="nom-fournisseur">Esprit de Famille</span> – Pont-l'Abbé</li>
        </ul>
        </p>
      </div>

    </div>

  </div>

</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>