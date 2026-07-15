<?php

require_once __DIR__ . '/includes/config.php';

$title = "Contact | Kreizenn Blaz Food Truck";

$description = "Contactez Kreizenn Blaz pour toute demande d'information dans le Pays Bigouden et le Finistère Sud.";

include_once __DIR__ . '/includes/head.php';

include_once __DIR__ . '/includes/header.php';

?>

<section>

  <div class="container contact">

    <div class="section-label">Contact</div>

    <div class="reassurance-card">

      <h2>
        Une question ou envie d'en savoir plus
        sur notre cuisine ?
      </h2>
      <p>
        Nous serons ravis d'échanger avec vous.
      </p>
      <p>
        Que ce soit pour connaître nos prochains emplacements, organiser un événement
        ou obtenir des renseignements sur nos prestations, n'hésitez pas à nous contacter.
      </p>

      <ul class="contact-info">
        <li>
          <i class="fa-solid fa-envelope"></i>
          <a href="mailto:kreizennblaz@gmail.com">kreizennblaz@gmail.com</a>
        </li>
        <li>
          <i class="fa-solid fa-phone"></i>
          <a href="tel:+33788922872">06 62 71 27 08</a>
        </li>
        <li>
          <i class="fa-solid fa-map-marker-alt"></i>
          2 rue du générale de gaulle, Loctudy

        </li>
      </ul>

      <p>
        Vous pouvez également nous suivre sur nos réseaux sociaux pour découvrir nos
        actualités, nos menus et nos emplacements du moment.
      </p>

      <div class="social-links">
        <a href="https://www.instagram.com/kb.bzh29/" target="_blank" aria-label="Instagram">
          <div class="social-contact">
            <img src="assets/images/instagram.svg" class="svg" alt="" width="20" height="20">
            <span class="social-label">kb.bzh29</span>
          </div>
        </a>

        <a href="https://www.facebook.com/profile.php?id=61574348263732" target="_blank" aria-label="Facebook">
          <div class="social-contact">
            <img src="assets/images/facebook.svg" class="svg" alt="" width="20" height="20">
            <span class="social-label">Kb Bzh</span>
          </div>

        </a>
      </div>

    </div>

  </div>

</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>