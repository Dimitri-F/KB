<?php

require_once __DIR__ . '/includes/config.php';

$title = "Cuisine bistronomique | Food Truck Pays Bigouden";

$description = "Découvrez la carte de Kreizenn Blaz : recettes maison et ingrédients locaux dans le Pays Bigouden.";

include_once __DIR__ . '/includes/head.php';

include_once __DIR__ . '/includes/header.php';

?>

<section class="documents-section">

  <div class="container">

    <div class="section-title">
      <h2>Découvrez nos plats et nos boissons</h2>
    </div>

    <div class="pdf-tabs">

      <button
        class="pdf-tab active"
        data-pdf="<?= BASE_URL ?>/assets/pdf/menu-semaine.pdf">
        Menu de la semaine
      </button>

      <button
        class="pdf-tab"
        data-pdf="<?= BASE_URL ?>/assets/pdf/carte-boissons.pdf">
        Boissons
      </button>

    </div>

    <div class="pdf-download">

      <a
        id="pdfDownload"
        href="assets/pdf/menu-semaine.pdf"
        class="btn-primary">

        Ouvrir le document en plein écran

      </a>

    </div>

    <div class="pdf-viewer">

      <iframe
        id="pdfFrame"
        src="assets/pdf/menu-semaine.pdf"
        title="Menu KB"
        loading="lazy">
      </iframe>

    </div>



  </div>

</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>