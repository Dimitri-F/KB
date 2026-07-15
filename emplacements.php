<?php

require_once __DIR__ . '/includes/config.php';

$title = "Où trouver notre Food Truck ?";

$description = "Retrouvez Kreizenn Blaz à Lesconil et dans le Pays Bigouden. Consultez nos emplacements.";

include_once __DIR__ . '/includes/head.php';

include_once __DIR__ . '/includes/header.php';

?>

<section class="map-section">

  <div class="container">

    <span class="section-label">
      Nous trouver
    </span>

    <h2>
      Notre point de départ.
    </h2>

    <div class="map-wrapper">

      <iframe
        title="Carte — Parking des Sables Blancs Loctudy"
        src="https://www.google.com/maps?q=Parking%20des%20Sables%20Blancs%20Loctudy&output=embed"
        width="100%"
        height="450"
        style="border:0;"
        loading="lazy">
      </iframe>

      <a
        href="https://www.google.com/maps/search/?api=1&query=Parking+des+Sables+Blancs+Loctudy"
        target="_blank"
        class="btn-map">
        Itinéraire Google Maps
      </a>

    </div>

  </div>

</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>