<?php

require_once __DIR__ . '/includes/config.php';

$title = "Horaires | Kreizenn Blaz Food Truck";

$description = "Consultez les horaires d'ouverture de Kreizenn Blaz dans le Pays Bigouden et le Finistère Sud.";

include_once __DIR__ . '/includes/head.php';

include_once __DIR__ . '/includes/header.php';

?>


<section class="section-horaire">

  <div class="container horaire">

    <div class="section-label">Horaires</div>

    <div class="reassurance-card">

      <h2>
        Nos horaires d'ouverture
      </h2>

      <ul>
        <li><span class="label-jour">Lundi</span> : Fermé</li>
        <li><span class="label-jour">Mardi</span> : 18h00 - 20h30</li>
        <li><span class="label-jour">Mercredi</span> : 18h00 - 20h30</li>
        <li><span class="label-jour">Jeudi</span> : Fermé</li>
        <li><span class="label-jour">Vendredi</span> : 18h00 - 20h30</li>
        <li><span class="label-jour">Samedi</span> : Fermé</li>
        <li><span class="label-jour">Dimanche</span> : Fermé</li>
      </ul>

    </div>

  </div>

</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>